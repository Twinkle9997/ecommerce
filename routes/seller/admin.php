<?php

use App\Http\Controllers\seller\AuthController;
use App\Http\Controllers\admin\Signup;


Route::view('/seller/login', "seller/login")->name("seller.login");
Route::view('/seller/signup', "seller/signup")->name("seller.signup");
Route::view('/seller/index', "seller/productUpload")->name("sellers.uploadForm");


Route::group(["prefix" => 'seller'], function(){
    Route::POST('signup', [AuthController::class, 'Signup'])->name('seller.signup');
});




?>
