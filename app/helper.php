<?php

use App\Enums\UserType;
use Illuminate\Support\Facades\Request;

function get_current_domain()
{
    try{
        return Request::route()->getDomain();
    } catch(Throwable $exception) {
        throw new LogicException('Could not determine current domain');
    }
}

function get_user_type_by_domain()
{
    $domain = get_current_domain();

    return match($domain) {
        config('domains.admin.domain') => UserType::Admin,
        config('domains.seller.domain') => UserType::Seller,
        config('domains.main.domain') => UserType::Buyer,
        config('domains.delivery.domain') => UserType::Delivery,
        default => throw new RuntimeException('Could not determine user type for domain: '.$domain ),
    };
}
