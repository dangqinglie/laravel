<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('index','Admin\IndexController@index');
Route::namespace('Admin')->group(function(){
	Route::get('index','IndexController@index');
});

Route::namespace('Web')->group(function(){
	Route::get('index','IndexController@index');
});