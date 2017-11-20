<?php namespace App\Http\Controllers\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Cate;
use App\Model\Location;

//use Illuminate\Http\Request;
use App\Model\Post;
use Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$location 			= Location::orderCategory();
		$cate_top 			= Cate::getList(['top'=>1]);
		$cate_home 			= Cate::getList(['home'=>1]);
		$cate_total 		= Cate::getListFollowKey(false);
		$location_total 	= Location::getListFollowKey(false);
		$post 				= Post::getListNew();
		//pre($post);
	    return view('front-end.home.index',compact('location','cate_top','cate_home','cate_total','location_total','post'));
		//
	}
	public function testOk(){
		if(Request::ajax()){
			pre($_POST);
			pre($_FILES);
			die;
		}
	}
	public function testnOk(Request $request){
		pre($_POST);
		pre($_FILES);
		/*if(Request::ajax()){
			die;
		}*/
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
