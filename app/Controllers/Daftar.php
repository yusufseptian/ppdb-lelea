<?php

namespace App\Controllers;

class Daftar extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Siswa',
            'subtitle' => 'Pendaftaran',
        ];
        return view('siswa/view_pendaftaran', $data);
    }
}
