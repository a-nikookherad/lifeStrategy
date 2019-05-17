<?php
/*--------------------------------admin Route-----------------------------------*/
Route::get('dashboard' , 'adminController@dashboard')->name("dashboard");

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
Route::group(['prefix' => 'dashboard'] , function () {
	Route::resource("whoami" , "whosController");
});


/*Route::group(['prefix' => 'dashboard/'], function () {
	//users user stuff
	Route::get('list', 'usersController@index')->name('users.list')->middleware('users');
	Route::post('login', 'usersController@login_post')->name('users.login_post');
	Route::get('register', 'usersController@register')->name('users.register')->middleware('users');
	Route::post('register', 'usersController@register_post')->name('users.register_post')->middleware('users');
	Route::get('edit/{id}', 'usersController@edit')->name('users.edit')->middleware('users');
	Route::post('edit/{id}', 'usersController@edit_post')->name('users.edit_post')->middleware('users');
	Route::get('log_out', 'usersController@log_out')->name('users.logout')->middleware('users');
	Route::get('delete/{id}', 'usersController@delete')->name('users.delete')->middleware('users');
});*/
/*--------------------------------default Route-----------------------------------*/
Route::get('/' , 'homeController@home')->name("home");
