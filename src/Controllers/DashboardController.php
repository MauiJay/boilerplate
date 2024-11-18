<?php

namespace mauijay\boilerplate\Controllers;

/**
 * Class DashboardController.
 */
class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];

        return view('mauijay\boilerplate\Views\dashboard', $data);
    }
}