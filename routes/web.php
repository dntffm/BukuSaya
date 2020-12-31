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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::resource('shop', 'ShopController');
Route::get('/shop/product/{id}','ShopController@showproduct');
Route::get('/cart', 'CartController@index');
Route::get('/cart/checkout','CartController@checkout');
Route::get('/cart/addtocart/{id}','CartController@addToCart');
Route::resource('/cart/transaction','TransactionController');
Route::get('/admin','AdminController@index')->middleware('role:admin')->name('admin.page');
Route::get('/admin/shop','AdminController@shop')->middleware('role:admin');
Route::get('/admin/categories','AdminController@categories')->middleware('role:admin');
Route::post('/admin/categoryadm','CategoryAdminController@store')->middleware('role:admin');
Route::delete('/admin/categoryadm/{id}','CategoryAdminController@destroy')->middleware('role:admin');
Route::get('/admin/categoryadm/{id}/edit','CategoryAdminController@edit')->middleware('role:admin');
Route::patch('/admin/categoryadm/{id}','CategoryAdminController@update')->middleware('role:admin');
Route::post('/admin/product-admin', 'AdminProductController@store');
Route::get('/admin/product-admin/{id}', 'AdminProductController@show');
Route::get('/admin/product-admin/{id}/edit', 'AdminProductController@edit');
Route::patch('/admin/product-admin/{id}', 'AdminProductController@update');
Route::delete('/admin/product-admin/{id}','AdminProductController@destroy');
Route::any('/search','HomeController@search');