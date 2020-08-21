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

// Route::get('/','UserController@show')->name('users.show');
// Auth::routes();

// Route::get('/show', 'UserController@show')->name('show');


// Route::get('/user/{id}', 'MypageController@index');

Route::get('user/{id}', 'MypageController@getUser')->name('users.mypage');

Route::get('user/{id}/edit', 'MypageController@edit')->name('users.edit'); // 編集画面

Route::put('user/{id}/update', 'MypageController@update')->name('users.update');

