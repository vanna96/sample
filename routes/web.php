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

Route::group(['middleware' => ['auth', 'authLog']], function () {
    // create category
    Route::get('category/index', 'CategoryController@index')->name('category_index');
    Route::get('category/create', 'CategoryController@create')->name('category_create');
    Route::get('category/edit/{id}', 'CategoryController@edit')->name('category_edit');
    Route::post('category/store', 'CategoryController@store')->name('category_store');
    Route::get('category/delete/{id}', 'CategoryController@delete')->name('category_delete');

    // create product
    Route::get('product/index', 'ProductController@index')->name('product_index');
    Route::get('product/create', 'ProductController@create')->name('product_create');
    Route::get('product/edit/{id}', 'ProductController@edit')->name('product_edit');
    Route::post('product/store', 'ProductController@store')->name('product_store');
    Route::get('product/delete/{id}', 'ProductController@delete')->name('product_delete');
});

