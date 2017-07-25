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

Route::get('/', [
	'uses' => 'WelcomeController@index',
	'as' => 'home'
]);

Route::get('articulos/{slug}',[
	'as' => 'article',
	'uses' => 'WelcomeController@article'
]);

Route::get('/tag/{tag}',[
	'as' => 'tagged',
	 'uses' => 'WelcomeController@tags'
]);

Route::get('home', 'HomeController@index');

Route::get('/admin',[
	'as' => 'adminsite',
	'uses' => 'AdminController@desktop'
]);

Route::get('/logout', [
	'uses' => 'AdminController@logout',
	'as' => 'logout'
]);

Route::get('admin/posts/{id}/edit', 'AdminController@edit');

Route::post('admin/posts/{id}/refresh', 'AdminController@refresh');

Route::get('admin/posts/new', [
	'as' => 'nuevo',
	'uses' => 'AdminController@nuevo'
]);

Route::get('admin/posts/{id}/delete', 'AdminController@delete');

Route::post('admin/posts/new', 'AdminController@crear');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('login', [
	'as' => 'login',
	'uses' => 'AdminController@desktop'
]);

Route::get('register', [
	'as' => 'register',
	'uses' => 'HomeController@register'
]);

Route::post('register/new', 'HomeController@index');

Route::get('auth/login', [
	'as' => 'log',
	'uses' => 'HomeController@login'
	]);
