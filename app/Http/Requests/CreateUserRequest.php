<?php namespace Sigesadmin\Http\Requests;

use Sigesadmin\Http\Requests\Request;

class CreateUserRequest extends Request {

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
			'user_name' => 'required',
 			'email' => 'required|email|unique:users,email',
			'password' => 'required',
			'rol' => 'required|in:secretaria,admin,docente'
		];
	}

}
