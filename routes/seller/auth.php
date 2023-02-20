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


//color
Route::group(['prefix' => 'color'], function(){
Route::get('/', 'ColorController@color')->name('color');
Route::post('/', 'ColorController@create')->name('color.create');
Route::get('/edit', 'ColorController@edit')->name('color.edit');
Route::post('/update', 'ColorController@update')->name('color.update');
Route::delete('/delete/{id?}', 'ColorController@delete')->name('color.delete');
});

// vouchers
Route::group(['prefix' => 'voucher'], function(){
Route::get('', 'VoucherController@index')->name('voucher');
Route::post('/', 'VoucherController@create')->name('voucher.create');
Route::delete("/{id?}", 'VoucherController@delete')->name('voucher.delete');
Route::get("/get/{id?}", 'VoucherController@edit')->name('voucher.edit');
Route::post("/update", 'VoucherController@update')->name('voucher.update');
});

// material
Route::group(['prefix' => 'material'], function(){
Route::get('', 'MaterialController@index')->name('material');
Route::post('/', 'MaterialController@create')->name('material.create');
Route::delete('/delete/{id?}', 'MaterialController@delete')->name('material.delete');
Route::get('/edit/{id?}', 'MaterialController@edit')->name('material.edit');
Route::post('/update/{id?}', 'MaterialController@update')->name('material.update');
});

// category
Route::group(['prefix' => 'category'], function(){
Route::get('', 'CategoryController@index')->name('category');
Route::post('/', 'CategoryController@create')->name('category.create');
Route::delete('/delete/{id?}', 'CategoryController@delete')->name('category.delete');
Route::get('/edit/{id?}', 'CategoryController@edit')->name('category.edit');
Route::post('/update/{id?}', 'CategoryController@update')->name('category.update');
});

///size
Route::group(['prefix' => 'size'], function(){
    Route::get('/', 'SizeController@size')->name('size');
    Route::post('/', 'SizeController@create')->name('size.create');
    Route::get('/edit', 'SizeController@edit')->name('size.edit');
    Route::post('/update', 'SizeController@update')->name('size.update');
    Route::delete('/delete/{id?}', 'SizeController@delete')->name('size.delete');
});