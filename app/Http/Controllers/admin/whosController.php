<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\whosReq;
use App\models\whoPost;
use App\models\whoPostsCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class whosController extends Controller
{

	public function index()
	{
		//
		$whoPostsCategories = whoPostsCategory::select("id" , "title")->get();
		return view("admin.whoAmI.index" , compact('whoPostsCategories'));
	}


	public function create()
	{
		//

		return view("admin.whoAmI.partials.insert");
	}


	public function store(whosReq $request)
	{
		//
		$newName = "img-" . date("Y-m-d-H-i-s") . "." . $request->file("img")->getClientOriginalExtension();
		$request->file("img")->move(public_path("assets\img\uploads\\") , $newName);
		$img = public_path("assets\img\uploads\\") . $newName;
		$data = [
			"userID" => 39 ,
			"img" => $img ,
			"title" => $request->input("title") ,
			"catID" => $request->input("catID") ,
			"description" => $request->input("description") ,
		];
		whoPost::insert($data);
		return redirect()->back();
	}


	public function show()
	{
		//
		$whoPosts = whoPost::all();
		return view("admin.whoAmI.partials.list" , compact("whoPosts"));
	}


	public function edit($id)
	{
		//
		$whoPost = whoPost::where("id" , $id)->first();

		return view("admin.whoAmI.partials.edit" , compact("whoPost"));
	}


	public function update(whosReq $request , $id)
	{
		//
		dd($request);
	}


	public function delete(whosReq $whoPost , $id)
	{
		//
		dd($id);
	}

	public function ajax(whosReq $request)
	{
		$param = $request->param;
		$catID = whoPostsCategory::select("id")->where('title' , $param)->first();
		$whoPosts = whoPost::where("catID" , $catID->id)->get();
		return view("admin.whoAmI.ajax.list" , compact('whoPosts'));
	}
}
