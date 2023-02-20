<?php

namespace App\Http\Middleware;

use App\Enums\UserType;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            switch (get_user_type_by_domain()) {
                case UserType::Admin:
                    return route('admin.login');
                case UserType::Seller:
                    return route('seller.login');
                case UserType::Delivery:
                    return route('delivery.login');
                default:
                    return route('login');
            }
        }
    }
}