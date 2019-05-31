<?php

namespace App\Http\Controllers\admin;

use App\models\whoPost;
use App\models\whoPostsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class whosController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
		return view("admin.whoAmI.index");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		$whoPostsCategories = whoPostsCategory::select("id" , "title")->get();
		return view("admin.whoAmI.partials.insert" , compact('whoPostsCategories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
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

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\models\whoPost $whoPost
	 * @return \Illuminate\Http\Response
	 */
	public function show(whoPost $whoPost)
	{
		//
		$whoPosts = whoPost::all();
		return view("admin.whoAmI.partials.list" , compact("whoPosts"));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\models\whoPost $whoPost
	 * @return \Illuminate\Http\Response
	 */
	public function edit(whoPost $whoPost)
	{
		//
		$whoPostsCategories = whoPostsCategory::select("id" , "title")->get();

		return view("admin.whoAmI.partials.edit" , compact(["whoPost" , "whoPostsCategories"]));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\models\whoPost $whoPost
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request , whoPost $whoPost)
	{
		//
		dd($request);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\models\whoPost $whoPost
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(whoPost $whoPost)
	{
		//
	}

	public function ajax(Request $request)
	{
		$param = $request->param;
		$catID = whoPostsCategory::select("id")->where('title' , $param)->first();
		$whoPosts = whoPost::where("catID" , $catID->id)->get();
		return view("admin.whoAmI.partials.list" , compact('whoPosts'));
	}
}
