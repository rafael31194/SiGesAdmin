<?php namespace Sigesadmin;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['first_name', 'last_name', 'email', 'user_name', 'password', 'rol', 'full_name'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/*
	 * Hace la relacion con la tabla user_profiles
	 */
	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function profile()
	{
		return $this->hasOne('Sigesadmin\UserProfile');
	}

	public function getFullNameAttribute()
	{
		return $this->first_name . ' ' . $this->last_name;
	}


	public function setPasswordAttribute($value)
	{
		if (!empty($value)) {
			$this->attributes['password'] = \Hash::make($value);
		}
	}

	//Sirve para filtrar la buscaqueda $name es una parametro
	//personalizado puede ser cualquier cosa
	public function scopeName($query, $name)
	{
		if (!empty($name)) {

			//\DB::raw ->solo funciona con mysq la solucion seria mejorar las migraciones
			//$query->where(\DB::raw("CONCAT(first_name,' ', last_name)"),$name); ->NOMBRE Y APELLIDO
			//$query->where('first_name',$name); -> sirve para buscar solo por primer nombre
			//$query->where(\DB::raw("CONCAT(first_name,' ', last_name)"),'LIKE',"%$name%"); //busqueda parcial

			$query->where('first_name', 'LIKE', "%$name%"); //-> con la base normalizada
		}

	}

	/**
	 * El usuario tiene muchos articulos
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function articles()
	{
		return $this->hasMany('Sigesadmin\Article');
	}
}


