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

//Route::get('/', function () {
   // return view('welcome');
//});
Route::get('/', function () {
 return view('news');
});
//Route::get('/','CategoriesController@index');
//Route::get('/category/getall','CategoriesController@getCategoryList');
//Route::get('/category','CategoriesController@index');
//Route::get('/category/edit/{any}','CategoriesController@editCategory');
//Route::post('/category/edit','CategoriesController@editCategory');
//Route::get('/category/add','CategoriesController@addCategory');
//Route::post('/added', 'CategoriesController@addedcategory');

Route::get('categories','CategoriesController@index')->name('categories.index');
Route::get('categories/create','CategoriesController@create')->name('categories.create');
Route::post('categories/store','CategoriesController@store')->name('categories.store');
Route::get('categories/{id}/edit','CategoriesController@edit')->name('categories.edit');
Route::post('categories/{id}/update','CategoriesController@update')->name('categories.update');
Route::get('categories/{id}/show','CategoriesController@show')->name('categories.show');