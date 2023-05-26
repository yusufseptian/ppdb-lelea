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
    // ($tmpNilai == $value['totalNilai']) ? $no : $no++
    public function index()
    {

        $data = [
            'title' => 'Pendaftaran',
            'subtitle' => 'Pendaftaran',
            'dtSiswa' => $this->modelSiswa->getRanking(),
        ];
        return view('admin/view_ranking', $data);
    }
}
