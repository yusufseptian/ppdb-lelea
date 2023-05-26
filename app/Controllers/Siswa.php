<?php

namespace App\Controllers;

use App\Models\Msiswa;
use App\Models\Muser;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
    private $validation;
    private $modelSiswa = null;
    private $modelAdmin = null;
    public function __construct()
    {
        $this->validation = \config\Services::validation();
        $this->modelSiswa  = new Msiswa();
        $this->modelAdmin  = new Muser();
        helper('form');
        helper('text');
    }
    public function index()
    {
        $siswa_nisn = session('log_auth')['akunNisn'];

        $data_siswa = $this->modelSiswa
            ->join('tb_orangtua', 'ortu_siswa_id = siswa_id')
            ->join('tb_berkas', 'berkas_siswa_id = siswa_id')
            ->join('tb_nilai', 'nilai_siswa_id = siswa_id')
            ->where('siswa_nisn', $siswa_nisn)->first();

        $data = [
            'title' => 'Siswa',
            'subtitle' => 'Dashboard Siswa',
            'dt_siswa' => $data_siswa
        ];
        return view('siswa/view_dashboard', $data);
    }
}
