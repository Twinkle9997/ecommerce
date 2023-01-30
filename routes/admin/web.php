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

Route::redirect('/', 'login');

Route::group([], base_path('routes/admin/guest.php'));

Route::middleware(['auth:admin', 'auth.notBlocked:admin'])
    ->group(base_path('routes/admin/auth.php'));