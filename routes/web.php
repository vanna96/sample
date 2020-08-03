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
    //Category
    Route::resource('category', 'CategoryController')->except('show');    
    Route::post('category/ajax', 'CategoryController@ajax')->name('ajax');
    // product   
    Route::resource('product', 'ProductController');
    // sub domain   
    Route::resource('sub-domain', 'SubDomainController');
    // sms   
    Route::resource('sms', 'SMSController');
    // translate
    Route::get('locale/{locale}', function($locale){
        Session::put('locale', $locale);
        return redirect()->back();
    });
    
});

Route::domain('{username}.localhost:8000')->group(function () {
    
    Route::get('/dashboard', 'HomeController@index1')->name('index1');
});
