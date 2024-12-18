<?php

namespace mauijay\boilerplate\Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Class AdminApp.
 */
class AdminApp extends BaseConfig
{
    //--------------------------------------------------------------------------
    // App name
    //--------------------------------------------------------------------------

    public $appName = 'ci4 Boilerplate';

    //--------------------------------------------------------------------------
    // Dashboard controller
    //--------------------------------------------------------------------------

    public $dashboard = [
        'namespace'  => 'mauijay\boilerplate\Controllers',
        'controller' => 'DashboardController::index',
        'filter'     => 'permission:admin',
    ];

    //--------------------------------------------------------------------------
    // please see https://cdn.datatables.net/plug-ins/1.10.20/i18n/
    //--------------------------------------------------------------------------

    public $i18n = 'English';

    //--------------------------------------------------------------------------
    // Theme boilerplate
    //
    // BG: blue, indigo, purple, pink, red, orange, yellow, green, teal, cyan, gray, gray-dark, black
    // Type: dark, light
    // Shadow: 0-4
    //
    //--------------------------------------------------------------------------

    public $theme = [
        'body-sm' => false,
        'navbar'  => [
            'bg'     => 'white',
            'type'   => 'light',
            'border' => true,
            'user'   => [
                'visible' => true,
                'shadow'  => 0,
            ],
        ],
        'sidebar' => [
            'type'    => 'dark',
            'shadow'  => 4,
            'border'  => false,
            'compact' => true,
            'links'   => [
                'bg'     => 'blue',
                'shadow' => 1,
            ],
            'brand' => [
                'bg'   => 'gray-dark',
                'logo' => [
                    'icon'   => 'favicon.ico', // path to image | this example icon on public root folder.
                    'text'   => '<strong>Bo</strong>ilerplate',
                    'shadow' => 2,
                ],
            ],
            'user' => [
                'visible' => true,
                'shadow'  => 2,
            ],
        ],
        'footer' => [
            'fixed'      => false,
            'vendorname' => 'Your Awesome Vendor',
            'vendorlink' => 'https://your-awesome.com',
        ],
    ];
}
