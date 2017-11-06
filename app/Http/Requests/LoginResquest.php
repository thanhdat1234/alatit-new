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
			'user_name'          	=> 'required|max:50|min:6|regex:/[a-zA-Z0-9_]{6,50}/',
			'user_pass'     		=> 'required|max:50|min:6',
		];
	}
	public function messages(){
		return[
			'user_name.required' 	=> 'Bạn chưa nhập tên đăng nhập !',
			'user_name.max' 	    => 'Tên dăng nhập không được quá 50 ký tự !',
			'user_name.min' 	    => 'Tên dăng nhập it nhất là 6 ký tự !',
			'user_name.regex' 	    => 'Tên dăng nhập chứa những ký tự không hợp lệ chỉ chấp nhật các ký tự từ alpha và "_" !',

			'user_pass.required' 	=> 'Bạn chưa nhập mật khẩu !',
			'user_pass.max' 	    => 'Mật khẩu không được quá 50 ký tự !',
			'user_pass.min' 	    => 'Mật khẩu it nhất là 6 ký tự !',
		];
	}

}
