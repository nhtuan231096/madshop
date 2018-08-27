<?php 
Route::get('/category.html', 'CategoryController@index')->name('category');
Route::get('delete-category/{id}', 'CategoryController@delete')->name('deleteCat');
Route::get('edit-category/{id}.html', 'CategoryController@edit')->name('editCate');
Route::post('edit-category/{id}.html', 'CategoryController@postedit')->name('editCate');
Route::get('add-category.html', 'CategoryController@add')->name('addCat');
Route::post('add-category.html', 'CategoryController@postadd')->name('addCat');
// Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'AutoCompleteController@index'));
// Route::get('searchajax',array('as'=>'searchajax','uses'=>'AutoCompleteController@autoComplete'));
 ?>

