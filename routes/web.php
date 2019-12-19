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


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/pricing', 'PagesController@pricing');
Route::get('/developer', 'PagesController@developer');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/orders', 'OrdersController@index');
Route::get('/analytics', 'AnalyticsController@index');
Route::get('/queries', 'QueriesController@index');
Route::get('/showStocks/{id}', 'StocksController@showStocks');
Route::get('/items/createItem/{id}', 'ItemsController@createItem');
Route::get('/user/{username}', 'StoresController@indexClient');
Route::get('/user/{id}/{username}', 'StoresController@showClient');

Route::post('/items/createItem', 'ItemsController@storeItem');

Route::get('/add-to-cart/{id}', 'CartsController@addToCart')->name('cart.addToCart');
Route::get('/reduce/{id}', 'CartsController@getReduceByOne')->name('cart.reduceByOne');
Route::get('/remove/{id}', 'CartsController@getRemove')->name('cart.remove');
Route::post('/checkout}', 'CartsController@checkout')->name('cart.checkout');
Route::get('/checkout/info}', 'CartsController@info')->name('cart.info');

Route::resource('products', 'ProductsController');
Route::resource('coupons', 'CouponsController');
Route::resource('blacklist', 'BlacklistController');
Route::resource('user_pages', 'UserPagesController');
Route::resource('stores', 'StoresController');
Route::resource('items', 'ItemsController');
Route::resource('stocks', 'StocksController');
Route::resource('cart', 'CartsController');

Auth::routes(['verify' => true]);



