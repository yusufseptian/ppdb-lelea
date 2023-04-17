<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Siswa',
            'subtitle' => 'Login',
        ];
        return view('siswa/view_login', $data);
    }
}
