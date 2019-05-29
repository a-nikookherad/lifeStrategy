<?php

namespace App\Http\Controllers\admin;

use App\models\whoPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\models\whoPost $whoPost
	 * @return \Illuminate\Http\Response
	 */
	public function show(whoPosts $whoPosts)
	{
		//

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\models\whoPost $whoPost
	 * @return \Illuminate\Http\Response
	 */
	public function edit(whoPosts $whoPosts)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\models\whoPost $whoPost
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request , whoPosts $whoPosts)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\models\whoPost $whoPost
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(whoPosts $whoPosts)
	{
		//
	}
}
