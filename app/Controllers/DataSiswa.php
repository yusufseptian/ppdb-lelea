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
    public function diterima($siswa_nisn)
    {
        $getData = $this->Msiswa->where('siswa_nisn', $siswa_nisn)->first();
        if ($getData['siswa_status_pendaftaran'] == 'Terdaftar') {
            $statusBaru = 'Diterima';
            $data = [
                'siswa_status_pendaftaran' => $statusBaru
            ];
            $this->Msiswa->update($getData['siswa_id'], $data);
        }
        return redirect()->to(base_url('datasiswa'))->with('success', 'Siswa berhasil diterima');
    }
    public function ditolak($siswa_nisn)
    {
        $getData = $this->Msiswa->where('siswa_nisn', $siswa_nisn)->first();
        if ($getData['siswa_status_pendaftaran'] = 'Terdaftar') {
            $statusBaru = 'Tidak Diterima';
        }
        $data = [
            'siswa_status_pendaftaran' => $statusBaru,
            'siswa_alasan_ditolak'  => $this->request->getPost('siswa_alasan_ditolak')
        ];
        $this->Msiswa->update($getData['siswa_id'], $data);
        return redirect()->to(base_url('datasiswa'))->with('danger', 'Siswa berhasil ditolak');
    }
}
