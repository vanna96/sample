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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// create category
Route::get('category/create', 'CategoryController@create');
Route::post('category/store', 'CategoryController@store')->middleware('auth');

// create product
Route::get('product/index', 'ProductController@index');
Route::get('product/create', 'ProductController@create');
Route::get('product/edit/{id}', 'ProductController@edit');
Route::post('product/store', 'ProductController@store');