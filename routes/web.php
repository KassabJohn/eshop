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

Route::get('/login', 'loginController@userIndex')->name('user.login');
Route::post('/login', 'loginController@userPosted');
Route::get('/signup', 'signupController@userIndex')->name('user.signup');
Route::post('/signup', 'signupController@userPosted');
Route::post('/check_email', 'signupController@emailCheck')->name('user.signup.check_email');
Route::get('/logout', 'loginController@userLogout')->name('user.logout');
Route::get('/history', 'user\userController@history')->name('user.history');
