<?php 
	Route::get('/order','HomeController@order')->name('order');
	Route::post('/order','HomeController@postorder')->name('order');
	Route::get('/order_success','HomeController@order_success')->name('order_success');
	Route::get('/order_error','HomeController@order_error')->name('order_error');
 ?>