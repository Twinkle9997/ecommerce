<?php

use App\Http\Controllers\seller\AuthController;
use App\Http\Controllers\admin\Signup;
use App\Http\Controllers\seller\ProductController;
use App\Http\Controllers\seller\{CategoryController, VoucherController, MaterialController};


Route::view('/seller/login', "seller/login")->name("seller.login");
Route::view('/seller/signup', "seller/signup")->name("seller.signup");

Route::get('/seller/products-list', [ProductController::class, "showList"])->name("seller.products");

// Route::view('', "seller/productUpload")->name("");
Route::get('seller/index', [ProductController::class, "Index"])->name('sellers.uploadForm');

Route::group(['prefix' => "productUpload"], function(){
    Route::POST('/upload', [ProductController::class, 'Upload'])->name('seller.form.upload');
});

Route::group(["prefix" => 'seller'], function(){
    Route::POST('signup', [AuthController::class, 'Signup'])->name('seller.signup');

    Route::view('/otp', 'seller/otp')->name('seller.otp');

    Route::POST('/otp', [AuthController::class, "checkOTP"])->name('seller.checkOtp');
    Route::POST('/login', [AuthController::class, "Login"])->name('seller.login');
});

Route::group(['prefix' => 'product'], function(){
 Route::POST('signup', [AuthController::class, 'Signup'])->name('seller.signup');
 Route::view('otp', 'seller/otp')->name('seller.otp');
 Route::POST('otp', [AuthController::class, "checkOTP"])->name('seller.checkOtp');
 Route::POST('login', [AuthController::class, "Login"])->name('seller.login');
});

Route::group(['prefix' => 'seller'], function(){

    // vouchers
    Route::POST('/voucher/form', [VoucherController::class, 'create'])->name('form.voucher');

    // vouchers deleted
    Route::delete("/voucher/form/{id?}", [VoucherController::class, 'delete'])->name('voucher.delete');

    // vouchers get edit 
    Route::put("/voucher/form/get/{id?}", [VoucherController::class, 'edit'])->name('form.voucher.edit');

    // vouchers updated 
    Route::POST("/voucher/form/updated", [VoucherController::class, 'updated'])->name('form.voucher.updated');

    // material
    // create material
    Route::POST('/material/form', [MaterialController::class, 'create'])->name('form.material');

    // material delete
    Route::delete('/material/form/delete/{id?}', [MaterialController::class, 'delete'])->name('form.material.delete');

    // material edit id
    Route::put('/material/form/edit/{id?}', [MaterialController::class, 'edit'])->name('form.material.edit');

    // material updated
    Route::put('/material/form/edited', [MaterialController::class, 'updated'])->name('form.material.updated');

    // category
    // category create
    Route::POST('/category/form', [CategoryController::class, 'create'])->name('form.category');
    
    // category delete
    Route::DELETE('/material/delete/{id?}', [CategoryController::class, 'delete'])->name('form.category.delete');
    
    // category edit
    Route::PUT('/material/edit/{id?}', [CategoryController::class, 'editData'])->name('form.category.editData');

    // category edit
    Route::POST('/material/edited', [CategoryController::class, 'updated'])->name('form.category.edited');
    
});

Route::group(['prefix' => 'seller/form'], function(){
    Route::get('category', [CategoryController::class, "index"])->name('category');
    Route::get('material', [MaterialController::class, "index"])->name('material');
    Route::get('voucher', [VoucherController::class, "index"])->name('voucher');
});





?>
