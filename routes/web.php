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

Route::get('admin', 'loginController@adminIndex')->name('admin.login');
Route::post('admin', 'loginController@adminPosted');

Route::get("/admin_panel", 'admin_panel\dashboardController@index')->name('admin.dashboard');
Route::get('admin/logout', 'loginController@adminLogout')->name('admin.logout');
Route::get('/admin_panel/categories', 'admin_panel\categoriesController@index')->name('admin.categories');
Route::post('/admin_panel/categories', 'admin_panel\categoriesController@posted');
Route::get('/admin_panel/categories/edit/{id}', 'admin_panel\categoriesController@edit')->name('admin.categories.edit');
Route::post('/admin_panel/categories/edit/{id}', 'admin_panel\categoriesController@update');
Route::get('/admin_panel/categories/delete/{id}', 'admin_panel\categoriesController@delete')->name('admin.categories.delete');
Route::post('/admin_panel/categories/delete/{id}', 'admin_panel\categoriesController@destroy');
Route::get('/admin_panel/products', 'admin_panel\productsController@index')->name('admin.products');
Route::get('/admin_panel/products/create', 'admin_panel\productsController@create')->name('admin.products.create');
Route::post('/admin_panel/products/create', 'admin_panel\productsController@store');
Route::get('/admin_panel/products/edit/{id}', 'admin_panel\productsController@edit')->name('admin.products.edit');
Route::post('/admin_panel/products/edit/{id}', 'admin_panel\productsController@update');
Route::get('/admin_panel/products/delete/{id}', 'admin_panel\productsController@delete')->name('admin.products.delete');
Route::post('/admin_panel/products/delete/{id}', 'admin_panel\productsController@destroy');
Route::get('/admin_panel/management', 'admin_panel\managementController@manage')->name('admin.orderManagement');
Route::post('/admin_panel/management', 'admin_panel\managementController@update')->name('admin.orderUpdate');


Route::get('/login', 'loginController@userIndex')->name('user.login');
Route::post('/login', 'loginController@userPosted');
Route::get('/signup', 'signupController@userIndex')->name('user.signup');
Route::post('/signup', 'signupController@userPosted');
Route::get('/edit', 'user\userController@edit')->name('user.edit');

Route::get('/logout', 'loginController@userLogout')->name('user.logout');
Route::get('/', 'user\userController@index')->name('user.home');
Route::get('/product/{id}', 'user\userController@view')->name('user.product');

Route::get('/search', 'user\userController@search')->name('user.search');
Route::get('/search?c={id}', 'user\userController@view')->name('user.search.cat');


Route::get('/view/{id}', 'user\userController@view')->name('user.view');
Route::post('/view/{id}', 'user\userController@post');

Route::get('/cart', 'user\userController@cart')->name('user.cart');
Route::post('/cart', 'user\userController@confirm');

Route::get('/logout', 'loginController@userLogout')->name('user.logout');
Route::get('/history', 'user\userController@history')->name('user.history');


Route::get('/edit/{user}', 'user\userController@edit')->name('user.edit');
Route::put('{user}', 'user\userController@update')->name('user.update');
