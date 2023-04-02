<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sejarah extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sejarah',
            'subtitle' => 'Manajemen Sejarah',
        ];
        return view('admin/view_sejarah', $data);
    }
}
