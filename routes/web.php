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

Route::get('/','HomeController@welcome');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'] , function(){
	Route::group(['middleware' => 'admin'], function(){
		Route::get('/','AdminController@index');
		Route::get('buku','AdminController@indexbuku');
		Route::get('buku/pdf','AdminController@reportbuku');
		Route::get('buku/add','AdminController@addbuku');
		Route::post('buku/post','AdminController@postbuku');
		Route::get('buku/edit/{id}','AdminController@editbuku');
		Route::post('buku/update','AdminController@updatebuku');
		Route::get('buku/delete/{id}','AdminController@deletebuku');
		Route::get('stokbuku','AdminController@indexstokbuku');
		Route::get('stokbuku/add','AdminController@addstokbuku');
		Route::post('stokbuku/post','AdminController@poststokbuku');
		Route::get('stokbuku/pdf','AdminController@reportstokbuku');
		Route::get('stokbuku/delete/{id}','AdminController@deletestokbuku');
		Route::get('user','AdminController@indexuser');
		Route::get('user/add','AdminController@adduser');
		Route::post('user/post','AdminController@postuser');
		Route::get('user/edit/{id}','AdminController@edituser');
		Route::post('user/update','AdminController@updateuser');
		Route::get('user/delete/{id}','AdminController@deleteuser');
		Route::get('user/pdf','AdminController@reportuser');
	});
});

Route::group(['prefix' => 'operator'] , function(){
	Route::group(['middleware' => 'operator'], function(){
		Route::get('/','OperatorController@index');
		Route::post('post','OperatorController@postpeminjaman');
		Route::get('pengembalian','OperatorController@pengembalian');
		Route::get('search','OperatorController@search');
	});
});
