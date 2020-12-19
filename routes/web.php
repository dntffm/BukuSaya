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
Route::get('/admin','AdminController@index')->middleware('role:admin')->name('admin.page');
Route::get('/admin/shop','AdminController@shop')->middleware('role:admin');