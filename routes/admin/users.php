<?php 
Route::get('users.html', 'UsersController@index')->name('users');
Route::get('delete-users/{id}', 'UsersController@delete')->name('deleteUsers');
Route::get('edit-users/{id}.html', 'UsersController@edit')->name('editUsers');
Route::post('edit-users/{id}','UsersController@postedit')->name('editPro');
Route::get('add-users.html', 'UsersController@add')->name('addUsers');
Route::post('add-users.html', 'UsersController@postadd')->name('addUsers');
 ?>
