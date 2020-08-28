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



//Route::post('/', 'SpotController@search')->name('spot.search');
Route::get('/search', 'SpotController@search');
Route::get('/', 'SpotController@search')->name('spot.search');




// Route::get('/','UserController@show')->name('users.show');
// Auth::routes();

// Route::get('/show', 'UserController@show')->name('show');


// Route::get('/user/{id}', 'MypageController@index');


Auth::routes();


Route::get('/', 'SpotController@index')->name('spot.index');

Route::group(['middleware' => 'auth'], function() {
    

    Route::get('spot/create', 'SpotController@create')->name('spot.create');
    Route::post('spot/create', 'SpotController@store')->name('spot.create');
    Route::get('spots/{id}/edit', 'SpotController@edit')->name('spots.edit'); // 編集画面
    Route::put('spots/{id}/update', 'SpotController@update')->name('spots.update');

    Route::get('/spots/{id}', 'SpotController@show')->name('spots.show');
   
    
    Route::get('user/{id}', 'MypageController@mypage')->name('users.mypage');
    Route::get('user/{id}/edit', 'MypageController@edit')->name('users.edit'); // 編集画面
    Route::put('user/{id}/update', 'MypageController@update')->name('users.update');
    
    
    
    Route::get('/review', 'ReviewController@index')->name('review.index'); 
    Route::get('review/create', 'ReviewController@create')->name('review.create'); // 投稿画面
    Route::post('review/create', 'ReviewController@store')->name('review.create'); // 保存処理
    Route::delete('review/{id}/delete', 'ReviewController@destroy')->name('review.destroy');
    Route::get('review/{id}/edit', 'ReviewController@edit')->name('review.edit'); // 編集画面
    Route::put('review/{id}/update', 'ReviewController@update')->name('review.update'); //更新処理
    Route::post('review/{id}/like', 'ReviewController@like');
  
  
    Route::post('review/{id}/dislike', 'ReviewController@dislike');



});