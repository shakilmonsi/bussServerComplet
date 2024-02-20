<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'     => CSRF::class,
        'toolbar'  => DebugToolbar::class,
        'honeypot' => Honeypot::class,
        'cors' => \Fluent\Cors\Filters\CorsFilter::class,
        'authGuard' => \App\Filters\AuthGuard::class,
        // 'apiAuth' => \App\Filters\ApiAuth::class,
        // 'permission' => \App\Filters\Permission::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            'honeypot',
            'csrf' => [
                'except' => [
                    'modules/api/v1/*',
                    'ajax/vehicle/pic/delete',
                    'modules/backend/tickets/seatlayout',
                    'modules/backend/websettings/factory-reset'
                ]
            ],
        ],
        'after'  => [
            'toolbar',
            'honeypot',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [
        'cors' => ['after' => ['modules/api/v1/*']],
        // 'apiAuth' => ['after' => ['modules/api/v1/*']],
        // 'permission' => ['before' => ['modules/backend/*']],
        'authGuard' => ['before' => ['modules/backend/*']],
    ];
}
