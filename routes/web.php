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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('user');
Route::get('/analytics', 'AnalyticsController@index')->middleware('user');
Route::get('/queries', 'QueriesController@index')->middleware('user');
Route::get('/showStocks/{id}', 'StocksController@showStocks');
Route::get('/items/createItem/{id}', 'ItemsController@createItem');
Route::get('/user/{username}', 'StoresController@indexClient');
Route::get('/user/{id}/{username}', 'StoresController@showClient');

Route::post('/items/createItem', 'ItemsController@storeItem');

Route::get('/add-to-cart/{id}', 'CartsController@addToCart')->name('cart.addToCart');
Route::get('/reduce/{id}', 'CartsController@getReduceByOne')->name('cart.reduceByOne');
Route::get('/remove/{id}', 'CartsController@getRemove')->name('cart.remove');
Route::post('/checkout', 'CartsController@checkout')->name('cart.checkout');
Route::get('/checkout/info', 'CartsController@info')->name('cart.info');

Route::get('/security', 'SettingsController@security')->name('settings.security')->middleware('user');
Route::get('/general', 'SettingsController@general')->name('settings.general')->middleware('user');
Route::get('/payments', 'SettingsController@payments')->name('settings.payments')->middleware('user');
Route::get('/admin_security', 'AdminSettingsController@security')->name('admin_settings.security')->middleware('admin');
Route::get('/admin_general', 'AdminSettingsController@general')->name('admin_settings.general')->middleware('admin');
Route::get('/admin_payments', 'AdminSettingsController@payments')->name('admin_settings.payments')->middleware('admin');

// Route::get('/admin', 'DashboardController@admin')->name('admin.index')->middleware('admin');

Route::resource('products', 'ProductsController')->middleware('user');
Route::resource('coupons', 'CouponsController')->middleware('user');
Route::resource('blacklist', 'BlacklistController')->middleware('user');
Route::resource('user_pages', 'UserPagesController');
Route::resource('stores', 'StoresController');
Route::resource('items', 'ItemsController')->middleware('user');
Route::resource('stocks', 'StocksController')->middleware('user');
Route::resource('cart', 'CartsController');
Route::resource('orders', 'OrdersController')->middleware('user');
Route::resource('settings', 'SettingsController')->middleware('user');
Route::resource('admin', 'AdminsController')->middleware('admin');
Route::resource('resellers', 'ResellersController')->middleware('admin');
Route::resource('admin_settings', 'AdminSettingsController')->middleware('admin');

Auth::routes(['verify' => true]);



