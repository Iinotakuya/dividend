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


Route::get('/dividend', 'Admin\DividendController@index');
Route::get('/dividend/indexlist', 'Admin\DividendController@indexlist');
Route::post('/dividend/indexlist', 'Admin\DividendController@indexlist');
Route::get('/dividend/show', 'Admin\DividendController@show');



Route::group(['prefix' => 'admin'], function() {
    //http://XXXXXX.jp/admin/devidend/create にアクセスが来たら、Controller Admin\DividendController のAction addに渡す
    Route::get('dividend/create', 'Admin\DividendController@add');
    Route::post('dividend/create', 'Admin\DividendController@create');
    Route::get('dividend/complete', 'Admin\DividendController@complete');
    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
