<?php

namespace App\Http\Controllers\admin;

use App\models\habitPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class habitsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
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
	 * @param  \App\models\habitPost $habitPost
	 * @return \Illuminate\Http\Response
	 */
	public function show(habitPost $habitPost)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\models\habitPost $habitPost
	 * @return \Illuminate\Http\Response
	 */
	public function edit(habitPost $habitPost)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\models\habitPost $habitPost
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request , habitPost $habitPost)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\models\habitPost $habitPost
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(habitPost $habitPost)
	{
		//
	}
}
