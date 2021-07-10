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
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth');
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth');
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
    Route::get('news', 'Admin\NewsController@index')->middleware('auth');
});

// profile
Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\Profilecontroller@add')->middleware('auth');    
    Route::get('', 'Admin\Profilecontroller@create');
    Route::get('profile/edit', 'Admin\Profilecontroller@edit')->middleware('auth');
    Route::get('', 'Admin\Profilecontroller@update');
    Route::post('profile/create', 'Admin\Profilecontroller@create');
    Route::post('profile/edit', 'Admin\Profilecontroller@update');
    Route::get('profile', 'Admin\Profilecontroller@index')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
