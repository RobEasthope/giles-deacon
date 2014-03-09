<?php

// Better to use get for controllers, unless specifically creating a restful gateway.

/*
 * Index
 */
Route::get('/', array(
	'as'=>'index',
	'uses'=>'IndexController@getIndex'
));

/*
 * Collections
 */
Route::get('/collections', array(
	'as'=>'collections',
	'uses'=>'CollectionsController@getIndex'
));

/*
 * Couture
 */
Route::get('/couture', array(
	'as'=>'couture',
	'uses'=>'CoutureController@getIndex'
));

/*
 * Archive
 */
Route::get('/archive', array(
	'as'=>'archive',
	'uses'=>'ArchiveController@getIndex'
));

/*
 * Studio
 */

Route::group(array('prefix' => 'studio', ), function(){

    Route::get('/', array(
		'as'=>'studio',
		'uses'=>'StudioController@getIndex'
	));

	Route::get('/article/{id}', 'StudioController@getArticle');
	Route::get('/about-giles', 'StudioController@getAboutGiles');

});

/*
 * Press
 */
Route::group(array('prefix' => 'press', ), function(){

    Route::get('/', array(
		'as'=>'press',
		'uses'=>'PressController@getIndex'
	));

	Route::get('/article/{id}', 'PressController@getArticle');

});

/*
 * Stockists
 */
Route::get('/stockists', array(
	'as'=>'stockists',
	'uses'=>'StockistsController@getIndex'
));

/*
 * Contact
 */
Route::get('/contact', array(
	'as'=>'contact',
	'uses'=>'ContactController@getIndex'
));


/*
 * Error
 */
App::missing(function($exception){

	return Response::view('error', array(), 404);
});