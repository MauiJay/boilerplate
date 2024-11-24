<?php

namespace mauijay\boilerplate\Controllers;

/**
 * Summary of DashboardController
 * @author 808 Business Solutions
 * @copyright (c) 2024 808biz
 * @link https://808.biz/
 */
class DashboardController extends BaseController
{
    /**
     * Summary of index
     * @return string
     */
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];

        return view('mauijay\boilerplate\Views\dashboard', $data);
    }
}