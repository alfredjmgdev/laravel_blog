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
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Web\PageController@blog')->name('blog');

Auth::routes();

// Web
Route::get('categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('etiqueta/{slug}', 'Web\PageController@tag')->name('tag');
Route::get('entrada/{slug}', 'Web\PageController@post')->name('post');

//Admin

Route::resource('tags', 'Admin\TagController');
Route::resource('categories',   'Admin\CategoryController');
Route::resource('posts', 		'Admin\PostController');