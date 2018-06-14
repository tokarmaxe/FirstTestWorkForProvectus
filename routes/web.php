<?php

use Illuminate\Http\Request;
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

//Routes for categories
Route::get('categories','CategoriesController@index')->name('categories.index');
Route::get('categories/create','CategoriesController@create')->name('categories.create');
Route::post('categories/store','CategoriesController@store')->name('categories.store');
Route::get('categories/{id}/edit','CategoriesController@edit')->name('categories.edit');
Route::post('categories/{id}/update','CategoriesController@update')->name('categories.update');
Route::get('categories/{id}/show','CategoriesController@show')->name('categories.show');
Route::delete('categories/{id}/destroy','CategoriesController@destroy')->name('categories.destroy');

//Routes for posts
Route::get('posts','PostsController@index')->name('posts.index');
Route::get('posts/create','PostsController@create')->name('posts.create');
Route::post('posts/store','PostsController@store')->name('posts.store');
Route::get('posts/{id}/show','PostsController@show')->name('posts.show');
Route::get('posts/{id}/edit','PostsController@edit')->name('posts.edit');
Route::post('posts/{id}/update','PostsController@update')->name('posts.update');
Route::delete('posts/{id}/destroy','PostsController@destroy')->name('posts.destroy');