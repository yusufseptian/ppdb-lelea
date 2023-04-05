<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Tentang extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tentang',
            'subtitle' => 'Manajemen Tentang',
        ];
        return view('admin/view_tentang', $data);
    }
}
