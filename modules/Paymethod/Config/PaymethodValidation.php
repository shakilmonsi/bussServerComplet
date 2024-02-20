<?php

namespace Modules\Paymethod\Config;

use Config\Validation;

class PaymethodValidation extends Validation
{
    public $flutterwaves =   [
        'live_public_key'  => 'required',
        'live_secret_key'  => 'required',
        'live_encryption_key'  => 'required',
        'test_public_key' => 'required',
        'test_secret_key'  => 'required',
        'test_encryption_key' => 'required',
        'environment' => 'required|integer'
    ];

    public $flutterwaves_errors = [
        'live_public_key' => [
            'required'    => 'Live public key is required',
        ],

        'live_secret_key' => [
            'required'    => 'Live secret key is required',
        ],

        'live_encryption_key' => [
            'required'    => 'Live encryption key is required',
        ],

        'test_public_key' => [
            'required'    => 'Test public key is required',
        ],

        'test_secret_key' => [
            'required'    => 'Test secret key is required',
        ],

        'test_encryption_key' => [
            'required'    => 'Test encryption key is required',
        ],

        'environment' => [
            'required' => 'Environment is required',
            'integer' => 'Invalid environment type',
        ]
    ];

    public $sslcommerz =   [
        'ssl_store_id'  => 'required',
        'ssl_store_password'  => 'required',
        'environment'  => 'required|integer',
    ];

    public $sslcommerz_errors = [
        'ssl_store_id' => [
            'required'    => 'Store id is required',
        ],

        'ssl_store_password' => [
            'required'    => 'Store password is required',
        ],

        'environment' => [
            'required' => 'Environment is required',
            'integer' => 'Invalid environment type',
        ]
    ];
}
