<?php namespace Sigesadmin\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfNotAdmin {
	/**
	 * @var Guard
	 */
	private $auth;

	/**
	 * RedirectIfNotAdmin constructor.
	 */
	public function __construct(Guard $auth)
	{

		$this->auth = $auth; //necesito esto para capturar el usuario logeado
	}


	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if($this->auth->user()->rol  !='admin'){
			$this->auth->logout();
			if($request->ajax()){
				return response('No tiene permisos para hacer la accion',401);
			}else{
				return redirect()->guest('auth/login');
			}
		}
		return $next($request);
	}

}
