<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', ['as'=>'index', 'uses'=>'indexController@index']);

Route::get('about', ['as'=>'about', 'uses'=>'aboutController@index']);

Route::get('contact', ['as'=>'contact', 'uses'=>'contactController@index']);

Route::get('articles', ['as'=>'articles', 'uses'=>'articlesController@index']);

Route::get('deleteArticle/{id?}', ['as'=>'deleteArticle', 'uses'=>'deleteArticleController@index']);

Route::match(['post', 'get'], 'addarticle', ['as'=>'addarticle', 'uses'=>'createArticleController@index']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::auth();

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'] ], function(){

	Route::get('/', ['uses'=>'Admin\AdminController@show', 'as'=>'admin_index']);
	Route::get('/add/post', ['uses'=>'Admin\AdminPostController@create', 'as'=>'admin_add_post']);
});