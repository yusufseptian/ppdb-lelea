<?php

namespace App\Controllers;

use App\Models\Mberkas;
use App\Models\Mnilai;
use App\Models\Mortu;
use App\Models\Msiswa;

class DataSiswa extends BaseController
{
    private $Msiswa;
    private $Mortu;
    private $Mnilai;
    private $Mberkas;
    public function __construct()
    {
        $this->Msiswa   = new Msiswa();
        $this->Mortu    = new Mortu();
        $this->Mnilai   = new Mnilai();
        $this->Mberkas  = new Mberkas();
        helper('form');
        helper('text');
    }
    public function index()
    {
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Manajemen Data Siswa',
            'dt_siswa' => $this->Msiswa->findAll()
        ];
        return view('admin/view_data_siswa', $data);
    }
    public function detail($siswa_nisn)
    {
        $data_siswa = $this->Msiswa
            ->join('tb_orangtua', 'ortu_siswa_id = siswa_id')
            ->join('tb_berkas', 'berkas_siswa_id = siswa_id')
            ->join('tb_nilai', 'nilai_siswa_id = siswa_id')
            ->where('siswa_nisn', $siswa_nisn)->first();
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Detail Data Siswa',
            'agama' => $this->agama,
            'dt_siswa' => $data_siswa
        ];
        // dd($data['dt_siswa']);
        return view('admin/view_detail_siswa', $data);
    }
}
