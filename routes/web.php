<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/test',function(){
    dd(bcrypt('password'));
});

Route::get('/admin', 'cms\AuthController@showLoginForm')->name('admin');


// Admin Auth Routes
Route::name('admin.')->prefix('admin')->group(function(){
    Route::get('login', 'cms\AuthController@showLoginForm')->name('login');
    Route::post('login', 'cms\AuthController@submit')->name('login.submit');
    Route::get('logout', 'cms\AuthController@logout')->name('logout');
});

Route::resource('/post', 'cms\PostController');

Route::middleware('auth:admin')->group(function(){
    //Slider Route
  
    //Dashboard Route
    Route::get('dashboard','cms\DashboardController@index')->name('dashboard.index');
    //Doctor slider Route
    Route::resource('/partner', 'cms\PartnerController');
    //Contact Route
    Route::resource('/contact', 'cms\ContactController');
    //Team Route
    Route::resource('/team', 'cms\TeamController');
    //
    Route::resource('/product', 'cms\ProductController');
    Route::resource('/service', 'cms\ServiceController');
    Route::resource('/category', 'cms\CategoryController');
   
    Route::resource('/amount', 'cms\AmountController');

   
});






