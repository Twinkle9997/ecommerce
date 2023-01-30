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

Route::group([], base_path('routes/buyer/guest.php'));

Route::middleware([
    'auth:web',
    'auth.notBlocked:web',
    'auth.preventDomainAccess',
    'agency.hasStripeAccount',
    'agency.hasSubscription',
    'agency.hasZipCode',
])
    ->group(base_path('routes/buyer/auth.php'));