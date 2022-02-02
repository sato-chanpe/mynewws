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

Route::group(["prefix"=>"thread"], function(){
    Route::group(["middleware"=>"auth"], function(){
        Route::get('new', 'ThreadController@add');
        Route::post('create', 'ThreadController@create');
    });
    Route::get('/', 'ThreadController@index');
    Route::get('{thread_id}', 'ThreadController@show');
});

Route::post('post/create', 'PostController@create');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');