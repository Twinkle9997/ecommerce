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

// Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//otp
Route::view('/otp', 'seller/otp')->name('otp');
Route::post('/otp', 'Auth\VerificationController@checkOTP')->name('checkOtp');

// Password Reset
Route::group(['prefix' => 'password', 'as' => 'password.'], function () {
    Route::get('reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('request');
    Route::post('email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('email');
    Route::get('reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('reset');
    Route::post('reset', 'Auth\ResetPasswordController@reset')->name('update');
});