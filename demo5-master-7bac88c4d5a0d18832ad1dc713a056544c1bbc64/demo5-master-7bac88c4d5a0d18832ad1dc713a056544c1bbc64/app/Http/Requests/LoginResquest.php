<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginResquest extends Request {

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
			'username' => 'required',
			'userpass' => 'required',
		];
	}
	public function messages(){
		return[
			'username.required' 	=> 'B?n ch?a nh?p tên ??ng nh?p !',
			'userpass.unique'		=> 'B?n ch?a nh?p password!',
		];
	}

}
