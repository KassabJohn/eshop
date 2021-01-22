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

Route::group(['middleware' => 'admin'], function() {

    Route::get("/admin_panel", 'admin_panel\dashboardController@index')->name('admin.dashboard');

    Route::get('admin/logout', 'loginController@adminLogout')->name('admin.logout');
    //categories
    Route::get('/admin_panel/categories', 'admin_panel\categoriesController@index')->name('admin.categories');
    Route::post('/admin_panel/categories', 'admin_panel\categoriesController@posted');

    Route::get('/admin_panel/categories/edit/{id}', 'admin_panel\categoriesController@edit')->name('admin.categories.edit');
    Route::post('/admin_panel/categories/edit/{id}', 'admin_panel\categoriesController@update');

    Route::get('/admin_panel/categories/delete/{id}', 'admin_panel\categoriesController@delete')->name('admin.categories.delete');
    Route::post('/admin_panel/categories/delete/{id}', 'admin_panel\categoriesController@destroy');
});


    Route::get('/login', 'loginController@userIndex')->name('user.login');
    Route::post('/login', 'loginController@userPosted');
    Route::get('/signup', 'signupController@userIndex')->name('user.signup');
    Route::post('/signup', 'signupController@userPosted');
    Route::post('/check_email', 'signupController@emailCheck')->name('user.signup.check_email');
    Route::get('/logout', 'loginController@userLogout')->name('user.logout');
    Route::get('/', 'user\userController@index')->name('user.home');
    Route::get('/product/{id}', 'user\userController@view')->name('user.product');

    Route::get('/search', 'user\userController@search')->name('user.search');
    Route::get('/search?c={id}', 'user\userController@view')->name('user.search.cat');


    Route::get('/view/{id}', 'user\userController@view')->name('user.view');
    Route::post('/view/{id}', 'user\userController@post');

    Route::get('/cart', 'user\userController@cart')->name('user.cart');
    Route::post('/cart', 'user\userController@confirm');

    Route::post('/edit_cart', 'user\userController@editCart')->name('user.editCart');
    Route::post('/delete_item_from_cart', 'user\userController@deleteCartItem')->name('user.deleteCartItem');


    Route::get('/logout', 'loginController@userLogout')->name('user.logout');

    Route::get('/history', 'user\userController@history')->name('user.history');

