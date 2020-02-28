<?php

return [
    'defaults' => [
        'guard' => 'customers',
        'passwords' => 'customers',
    ],

    'guards' => [
        'customers' => [
            'driver' => 'jwt',
            'provider' => 'customers',
        ],
        'authors' => [
            'driver' => 'jwt',
            'provider' => 'authors',
        ],
    ],

    'providers' => [
        'customers' => [
            'driver' => 'eloquent',
            'model' => \App\Models\Customer::class
        ],
        'authors' => [
            'driver' => 'eloquent',
            'model' => \App\Models\Author::class
        ]
    ]
];
