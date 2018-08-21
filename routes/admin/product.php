<?php 
	Route::get('list_product','ProductController@product')->name('list_product');
	Route::get('add_product','ProductController@add')->name('add_product');
	Route::post('add_product','ProductController@created')->name('add_product');
	Route::get('edit_product/{id}','ProductController@edit')->name('editPro');
	Route::post('edit_product/{id}','ProductController@postedit')->name('editPro');
	Route::get('delete-product/{id}','ProductController@delete')->name('deletePro');
 ?>