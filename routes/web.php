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
// Route::get('db', function(){
// 	Schema::create('admin', function($table){
// 		$table->increments('id');
// 		$table->string('name',200);
// 		$table->string('password',200);
// 		$table->string('email',255);
// 		$table->string('status');
// 		$table->datetime('created_at');
// 		$table->datetime('updated_at');
// 	});
// 	echo 'Đã thực hiện lệnh';
// });
// Route::get('admin', 'Admin\AdminController@index');
// Route::get('admin/login.html','Admin\AuthController@login')->name('login');
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){
	Route::get('/','AdminController@index')->name('admin');
	require 'category.php';
	require 'product.php';
	// require 'category.php';
});
Route::get('admin/login.html','Admin\AuthController@login')->name('login');
Route::post('admin/login.html','Admin\AuthController@post_login')->name('login');

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/login.html','AuthController@login')->name('home.login');
Route::post('/login.html','AuthController@post_login')->name('home.login');


Route::get('/register.html','AuthController@register')->name('register');
Route::post('/register.html','AuthController@post_register')->name('register');

