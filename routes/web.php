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



Route::get('spots/{id}/edit', 'EditController@edit')->name('spots.edit'); // 編集画面
Route::put('spots/{id}/update', 'EditController@update')->name('spots.update'); //更新処理
Route::get('/spots/{id}', 'SpotController@show')->name('spots.show');
