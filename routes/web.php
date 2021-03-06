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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'Admin\DividendController@index')->name('TOP');
Route::get('/dividend/indexlist', 'Admin\DividendController@indexlist');
Route::post('/dividend/indexlist', 'Admin\DividendController@indexlist');
Route::get('/dividend/category', 'Admin\DividendController@category');
Route::get('/dividend/show', 'Admin\DividendController@show');



Route::group(['prefix' => 'admin'], function() {
    //http://XXXXXX.jp/admin/devidend/create にアクセスが来たら、Controller Admin\DividendController のAction addに渡す
    Route::get('dividend/create', 'Admin\DividendController@add')->middleware('auth');
    Route::post('dividend/create', 'Admin\DividendController@create')->name('create');
    Route::get('dividend/complete', 'Admin\DividendController@complete');
    Route::get('diividend/edit', 'Admin\DividendController@edit')->middleware('auth'); 
    Route::post('dividend/edit', 'Admin\DividendController@update')->middleware('auth');
    Route::get('dividend/mypage/delete','Admin\DividendController@delete')->middleware('auth');
    Route::get('dividend/mypage/{id}', 'Admin\DividendController@mypage')->name('mypage');
    
    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
