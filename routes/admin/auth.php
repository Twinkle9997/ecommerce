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