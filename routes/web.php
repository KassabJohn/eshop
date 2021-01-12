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

Route::get('/login', 'loginController@userIndex')->name('User.login');
Route::post('/login', 'loginController@userPosted');
Route::get('/signup', 'signupController@userIndex')->name('User.signup');
Route::post('/signup', 'signupController@userPosted');
Route::post('/check_email', 'signupController@emailCheck')->name('User.signup.check_email');
Route::get('/logout', 'loginController@userLogout')->name('User.logout');
Route::get('/history', 'User\userController@history')->name('User.history');
