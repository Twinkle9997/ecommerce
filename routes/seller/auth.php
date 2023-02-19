<?php

use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------------------------
| Auth only web routes
|---------------------------------------------------------------
|
| All routes are already protected with 'auth:web' middleware
|
*/
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Route::get('/products-list', 'ProductController@showList')->name("products");
Route::get('/index', "ProductController@index")->name('uploadForm');
Route::post('/upload', "ProductController@upload")->name('form.upload');

Route::group(['prefix' => 'form'], function(){
    Route::get('category', [CategoryController::class, "index"])->name('category');
    Route::get('material', [MaterialController::class, "index"])->name('material');
    Route::get('voucher', [VoucherController::class, "index"])->name('voucher');
    Route::get('size', [SizeController::class, "size"])->name('size');
    Route::get('color', [ColorController::class, "color"])->name('color');
});