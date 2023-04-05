<?php

namespace App\Controllers;

class Admin extends BaseController
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
