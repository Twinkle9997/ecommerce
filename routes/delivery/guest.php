<?php

use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------------------------
| Guest web routes
|---------------------------------------------------------------
|
| Routes that are to be consumed by guest users.
|
| Note: you need to manually add `guest` middleware on routes
| Note: NOT all routes have `guest` middleware applied, for example `logout`
|
*/
// Signup
Route::get('signup', 'Auth\SignupController@showSignUpForm')->name('signup');
Route::post('signup', 'Auth\SignupController@signup');

Route::view('redirect-status', 'redirectStatus')->name('redirectStatus');

// Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::group(['prefix' => 'password', 'as' => 'password.'], function () {
    Route::get('reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('request');
    Route::post('email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('email');
    Route::get('reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('reset');
    Route::post('reset', 'Auth\ResetPasswordController@reset')->name('update');
});