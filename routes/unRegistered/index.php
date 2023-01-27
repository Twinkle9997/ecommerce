<?php

use App\Http\Controllers\Buyer\AuthController;

Route::view('/', 'screen/unRegistered/index')->name('unRegistered.index');



Route::view('/category/{productCategory}', 'screen/unRegistered/products')->name('unRegistered.products');

Route::view('/category/{productCategory}/{productName}', 'screen/unRegistered/productDetails')->name('unRegistered.products');
Route::view('/cart-details', 'screen/unRegistered/cart')->name('unRegistered.cart');

Route::group(["prefix" => 'user'], function(){

    // signup
    Route::POST('/buyer/signup', [AuthController::class, 'Signup'])->name('buyer/signup');
    Route::view('/signup', 'screen/unRegistered/signup')->name('unRegistered.signup');
    Route::view('/otp', 'screen/unRegistered/otp')->name('unRegistered.otp');



    // Route::view('/', 'screen/unRegistered/index')->name('unRegistered.index');

    Route::view('/login', 'screen/unRegistered/login')->name('unRegistered.login');
    Route::POST('/buyer/login', [AuthController::class, 'Login'])->name('buyer.login');

    

    Route::POST('/buyer/checkOtp', [AuthController::class, 'CheckOtp'])->name('buyer.checkOtp');

});


Route::get('logout', function(){
     session()->flush();
    return redirect()->back()->with('success', 'logout successful');
})->name('logout');


?>
