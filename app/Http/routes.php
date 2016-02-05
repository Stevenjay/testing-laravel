<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
	return view('about');
});

Route::get('contact', function () {
	return view('contact');
});

Route::post('contact', function () {
	return view('contact');
});

Route::get('products', 'ProductsController@index');
Route::get('products/create', 'ProductsController@create')->middleware('web');
Route::post('products/store', 'ProductsController@store')->middleware('web');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
