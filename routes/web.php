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


Route::get('thread/new', 'ThreadController@add')->middleware('auth');
Route::post('thread/create', 'ThreadController@create');
Route::get('thread', 'ThreadController@index');
Route::get('thread/{thread_id}', 'ThreadController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');