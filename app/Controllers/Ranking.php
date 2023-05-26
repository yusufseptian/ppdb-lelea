<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Msiswa;

class Ranking extends BaseController
{
    private $modelSiswa = null;

    public function __construct()
    {
        $this->modelSiswa = new Msiswa();
    }

    public function index()
    {
        $data = [
            'title' => 'Pendaftaran',
            'subtitle' => 'Pendaftaran',
            'dtSiswa' => $this->modelSiswa->where(''),
        ];
        return view('admin/view_rangking', $data);
    }
}
