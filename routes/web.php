<?php
/*--------------------------------admin Route-----------------------------------*/
Route::get('/dashboard' , 'dashboardController@dashboard')->name("dashboard");
Route::group(['prefix' => 'users/'] , function () {
	//users user stuff
	Route::get('list' , 'usersController@index')->name('users.list')->middleware('users');
	Route::post('login' , 'usersController@login_post')->name('users.login_post');
	Route::get('register' , 'usersController@register')->name('users.register')->middleware('users');
	Route::post('register' , 'usersController@register_post')->name('users.register_post')->middleware('users');
	Route::get('edit/{id}' , 'usersController@edit')->name('users.edit')->middleware('users');
	Route::post('edit/{id}' , 'usersController@edit_post')->name('users.edit_post')->middleware('users');
	Route::get('log_out' , 'usersController@log_out')->name('users.logout')->middleware('users');
	Route::get('delete/{id}' , 'usersController@delete')->name('users.delete')->middleware('users');
});
Route::group(["prefix" => "whoAmI/" , "namespace" => "admin"] , function () {
	Route::get("index" , "whosController@index")->name("who.list");
	Route::get("show" , "whosController@show")->name("who.show");
	Route::get("create" , "whosController@create")->name("who.create");
	Route::post("store" , "whosController@store")->name("who.store");
	Route::get("edit/{id}" , "whosController@edit")->name("who.edit");
	Route::post("update" , "whosController@update")->name("who.update");
	Route::get("delete/{id}" , "whosController@delete")->name("who.delete");
	Route::post("ajax" , "whosController@ajax")->name("who.ajax");
});


/*--------------------------------default Route-----------------------------------*/
Route::get('/' , 'HomeController@home')->name("home");

Auth::routes();

Route::get('/home' , 'HomeController@index')->name('home');
