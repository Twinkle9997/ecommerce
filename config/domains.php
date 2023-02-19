<?php

return [
    'main' => [
      'domain' => env('MAIN_DOMAIN','ecommerce.test')
    ],
    'admin' => [
        'domain' => env('ADMIN_DOMAIN','admin.ecommerce.test')
    ],
    'seller' => [
        'domain' => env('SELLER_DOMAIN','seller.ecommerce.test')
    ],
    'delivery' => [
        'domain' => env('DELIVERY_DOMAIN','delivery.ecommerce.test')
    ]
];