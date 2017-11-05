<?php namespace App\Http\Controllers\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginResquest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function getRegister(){
		return view('front-end.user.register');
	}
	public function postRegister(){

	}
	public function getLoginUser(){
		return view('front-end.user.login');
	}
	public function postLoginUser(){

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
