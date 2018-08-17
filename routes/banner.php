<?php 
	Route::get('banner','BannerController@banner')->name('banner');
	Route::get('AddBanner','BannerController@add')->name('add_Banner');
	Route::post('AddBanner','BannerController@postadd')->name('add_Banner');
	Route::get('delete_banner/{id}','BannerController@delete')->name('delete_banner');
 ?>