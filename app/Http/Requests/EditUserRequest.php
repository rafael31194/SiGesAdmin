<?php namespace Sigesadmin\Http\Requests;

use Illuminate\Routing\Route;
use Sigesadmin\Http\Requests\Request;

class EditUserRequest extends Request {
	/**
	 * @var Route
	 */
	private $route;

	/**
	 * EditUserRequest constructor.
	 */
	public function __construct(Route $route)
	{

		$this->route = $route;
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'first_name' => 'required|min:3',
			'last_name' => 'required',
			'email' => 'required|email|unique:users,email,'. $this->route->getParameter('users'),
			//'email' => 'required|email|unique:users,email',
			'password' => '',
			'rol' => 'required|in:secretaria,admin,docente'
		];
	}

}
