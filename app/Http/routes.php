<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['prefix'=>'admin'], function(){
	

	Route::group(['prefix'=>'posts'], function(){
		Route::get('', ['as'=>'admin.posts', 'uses'=>'PostsAdminController@index']);
	});

	Route::get('', ['as'=>'admin', 'uses'=>'PostsAdminController@index']);
});

Route::get('/', ['as'=>'posts', 'uses'=>'PostsController@index']);
Route::get('{id}', ['as'=>'posts.view', 'uses'=>'PostsController@view']);
