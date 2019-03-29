<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::get('crud', function () {
  return view('crud.login');
});

Route::get('crud/add_data', function() {
	return view('crud.home');
});

Route::post('crud/add', 'Crud\Crudcontroller@add_data');

Route::get('crud/read', 'Crud\Crudcontroller@read_data');

Route::get('crud/delete/{id}', 'Crud\Crudcontroller@delete_data');

Route::get('crud/edit/{id}', 'Crud\Crudcontroller@edit_data');

Route::post('crud/update', 'Crud\Crudcontroller@update_data');

Route::get('crud/logout', 'Crud\Crudcontroller@logout');

Route::get('crud/login', function() {
	if(Auth::user()) {
		if(Auth::user()->access_rights=="admin") {
			return view('crud.home');
		} else {
			return view('crud.user_view');
		}
	} else {
		return view('crud.login');	
	}
});

Route::post('crud/login', 'Crud\Crudcontroller@login');

Route::post('crud/add_user', 'Crud\Crudcontroller@add_user');

Route::get('crud/register', function() {
	if(Auth::user()) {
		if(Auth::user()->access_rights=="admin") {
			return view('crud.home');
		} else {
			return view('crud.user_view');
		}
	} else {
	return view('crud.register');
	}
});

Route::get('crud/user_view', 'Crud\Crudcontroller@user_view');
