<?php namespace App\Http\Controllers\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginResquest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\Register;
use App\Model\User;

class UserController extends Controller {

	public function getRegister(){
		return view('front-end.user.register');
	}
	public function postRegisterUser(Register $request){
		$addr = "";
		$user = new User();
		$user->name      = $request->name;
		$user->fullname  = $request->user_fullname;
		$user->email  = $request->user_email;
		$user->phone  = $request->user_phone;
		$user->birthday  = $request->user_birthday;
		$user->gender  = $request->user_gender;
		$user->remember_token  = $request->_token;
		$user->addr  = $addr;
		$user->point  = 0;
		$user->coin  = 0;
		$user->level  = 1;
		$user->status  = 1;
		$user->password  = bcrypt($request->user_pass);
		$user->save();
		return redirect(url(""))->with(['flash_level'=>'success','flash_messages'=>'Chúc m?ng b?n t?o tài kho?n thành công !']);
	}
	public function getLoginUser(){
		return view('front-end.user.login');
	}
	public function postLoginUser(LoginResquest $request){
		$login = [
			'name'      => $request->user_name,
			'password'  => $request->user_pass,
			'status'	=> 1
		];
		if(Auth::attempt($login)){
			return redirect(url(''));
		}else{
			return redirect(url(''))->with(['flash_messages'=>'Tên ??ng nh?p ho?c m?t kh?u không ?úng !','flash_level'=>'login']);
		}
	}
	public function postLogoutUser(){
		Auth::logout();
		return redirect(url(''));
	}
	public function getProfile(){
		return view('front-end.user.profile');
	}
	public function postProfile(){

	}
	public function destroy($id)
	{
		//
	}

}
