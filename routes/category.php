<?php 
Route::get('/category.html', 'CategoryController@index')->name('category');
Route::get('delete_category/{id}', 'CategoryController@delete')->name('deleteCat');
Route::get('edit_category/{id}.html', 'CategoryController@edit')->name('editCat');
Route::get('add_category.html', 'CategoryController@add')->name('addCat');

 ?>

