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



   Auth::routes();
    
   
   
   
   
   
   // Route::get('user/{id}', 'MypageController@index')->name('mypage');
   //  Route::get('user/{id}', 'MypageController@show')->name('mypage');
   
   
   
   Route::group(['middleware' => 'auth'], function() {


      Route::get('/', 'SpotController@index')->name('spot.index');
      Route::get('spot/create', 'SpotController@create')->name('spot.create');
      Route::post('spot/create', 'SpotController@store')->name('spot.create');
      Route::get('user/{id}', 'MypageController@mypage')->name('users.mypage');
      
      Route::get('user/{id}/edit', 'MypageController@edit')->name('users.edit'); // 編集画面
      
      Route::put('user/{id}/update', 'MypageController@update')->name('users.update');
      
      
      
      Route::get('/review', 'ReviewController@index')->name('review.index'); 
      Route::get('review/create', 'ReviewController@create')->name('review.create'); // 投稿画面
      Route::post('review/create', 'ReviewController@store')->name('review.create'); // 保存処理
       });