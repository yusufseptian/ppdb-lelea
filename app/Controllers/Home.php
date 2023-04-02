<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Dashboard Admin',
        ];
        return view('template/index', $data);
    }
}
