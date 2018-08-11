<?php 
Route::get('/category.html', 'CategoryController@index')->name('category');
Route::get('delete-category/{id}', 'CategoryController@delete')->name('deleteCat');
Route::get('edit-category/{id}.html', 'CategoryController@edit')->name('editCat');
Route::get('add-category.html', 'CategoryController@add')->name('addCat');
Route::post('add-category.html', 'CategoryController@postadd')->name('addCat');

 ?>

