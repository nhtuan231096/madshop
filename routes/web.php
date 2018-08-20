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
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){
	Route::get('/','AdminController@index')->name('admin');
	require 'category.php';
	require 'product.php';
	require 'banner.php';
});
Route::get('admin/login.html','Admin\AuthController@login')->name('login');
Route::post('admin/login.html','Admin\AuthController@post_login')->name('login');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/login.html','AuthController@login')->name('home.login');
Route::post('/login.html','AuthController@post_login')->name('home.login');


Route::get('/register.html','AuthController@register')->name('register');
Route::post('/register.html','AuthController@post_register')->name('register');

Route::get('//{slug}.html','HomeController@view')->name('view');

Route::get('cart/add-cart/{id}','HomeController@add_cart')->name('add-cart');
Route::get('cart/xem-gio-hang','HomeController@gio_hang')->name('gio-hang');
Route::get('cart/delete/{id}','HomeController@delete_cart')->name('delete-cart');
Route::get('cart/update/{id}','HomeController@update_cart')->name('update-cart');
Route::get('cart/clear-cart','HomeController@clear')->name('clear_cart');

// Route::get('//{}','HomeController@product')->name('view');

