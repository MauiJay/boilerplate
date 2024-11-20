<?php

$routes->group('admin', function ($routes) {

    /**
     * Admin routes.
     **/
    $routes->group('/', [
        'filter'    => config('AdminApp')->dashboard['filter'],
        'namespace' => config('AdminApp')->dashboard['namespace'],
    ], function ($routes) {
        $routes->get('/', config('AdminApp')->dashboard['controller']);
    });

    /**
     * User routes.
     **/
    $routes->group('user', [
        'filter'    => 'permission:back-office',
        'namespace' => 'mauijay\boilerplate\Controllers\Users',
    ], function ($routes) {
        $routes->match(['get', 'post'], 'profile', 'UserController::profile', ['as' => 'user-profile']);
        $routes->resource('manage', [
            'filter'     => 'permission:manage-user',
            'namespace'  => 'mauijay\boilerplate\Controllers\Users',
            'controller' => 'UserController',
            'except'     => 'show',
        ]);
    });


 

    /**
     * Permission routes.
     */
    $routes->resource('permission', [
        'filter'     => 'permission:role-permission',
        'namespace'  => 'mauijay\boilerplate\Controllers\Users',
        'controller' => 'PermissionController',
        'except'     => 'show,new',
    ]);

    /**
     * Role routes.
     */
    $routes->resource('role', [
        'filter'     => 'permission:role-permission',
        'namespace'  => 'mauijay\boilerplate\Controllers\Users',
        'controller' => 'RoleController',
    ]);




    /**
     * Menu routes.
     */
    $routes->resource('menu', [
        'filter'     => 'permission:menu-permission',
        'namespace'  => 'mauijay\boilerplate\Controllers\Users',
        'controller' => 'MenuController',
        'except'     => 'new,show',
    ]);

    $routes->put('menu-update', 'MenuController::new', [
        'filter'    => 'permission:menu-permission',
        'namespace' => 'mauijay\boilerplate\Controllers\Users',
        'except'    => 'show',
        'as'        => 'menu-update',
    ]);

        /**
     * Users Update
     */
    $routes->post('user/manage/(:any)/update', 'UserController::update/$1', [
        'filter' => 'permission:back-office',
        'namespace' => 'mauijay\boilerplate\Controllers\Users',
        'except' => 'show',
        'as' => 'update',
    ]);

    $routes->post('role/(:any)/update', 'RoleController::update/$1', [
        'filter' => 'permission:role-permission',
        'namespace' => 'mauijay\boilerplate\Controllers\Users',
        'except' => 'show',
        'as' => 'updateRole',
    ]);
    
});