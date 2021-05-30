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

// news
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

// profile
Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\Profilecontroller@add');
    Route::get('', 'Admin\Profilecontroller@create');
    Route::get('profile/edit', 'Admin\Profilecontroller@edit');
    Route::get('', 'Admin\Profilecontroller@update');
});
