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

// Route::get('/',['as' => 'admin.index', function () {
//   return view('welcome');
// }]);

//GET, POST, PUT, DELETE, ETC...

// Route::group(['prefix' => 'articles'], function(){
//   Route::get('view/{id}',[
//     'uses' => 'TestController@view',
//     'as' => 'articlesView'
//   ]);
// });


//Rutas del frontend
Route::get('/', ['as' => 'front.index',
  'uses' => 'FrontController@index'
]);

Route::get('categories/{name}',[
  'uses' => 'FrontController@searchCategory',
  'as' => 'admin.front.search.category'
]);

Route::get('tags/{name}',[
  'uses' => 'FrontController@searchTag',
  'as' => 'admin.front.search.tag'
]);

Route::get('articles/{slug}', [
  'uses' => 'FrontController@viewArticle',
  'as' => 'admin.front.view.article'
]);


//Rutas panel de administración
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

  Route::get('/',[
    'uses' => 'UsersController@index',
    'as' => 'admin.users.index']);

  Route::group(['middleware' => 'admin'], function(){

    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy', [
      'uses' => 'UsersController@destroy',
      'as' => 'admin.users.destroy'
    ]);
  });


  Route::resource('categories', 'CategoriesController');
  Route::get('categories/{id}/destroy', [
    'uses' => 'CategoriesController@destroy',
    'as' => 'admin.categories.destroy'
  ]);

  Route::resource('tags', 'TagsController');
  Route::get('tags/{id}/destroy', [
    'uses' => 'TagsController@destroy',
    'as' => 'admin.tags.destroy'
  ]);

  Route::resource('articles', 'ArticlesController');
  Route::get('articles/{id}/destroy', [
    'uses' => 'ArticlesController@destroy',
    'as' => 'admin.articles.destroy'
  ]);

  Route::get('images', [
    'uses' => 'ImagesController@index',
    'as' => 'admin.images.index'
  ]);
});

Route::get('admin/auth/login', [
  'uses' => 'Auth\AuthController@getLogin',
  'as' => 'admin.auth.login'
]);

Route::post('admin/auth/login', [
  'uses' => 'Auth\AuthController@postLogin',
  'as' => 'admin.auth.login'
]);

Route::get('admin/auth/logout', [
  'uses' => 'Auth\AuthController@getLogout',
  'as' => 'admin.auth.logout'
]);
