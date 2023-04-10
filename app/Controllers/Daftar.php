<?php

namespace App\Controllers;

use App\Models\Mortu;
use App\Models\Msiswa;

class Daftar extends BaseController
{
    private $Msiswa;
    private $Mortu;
    public function __construct()
    {
        $this->Msiswa   = new Msiswa();
        $this->Mortu    = new Mortu();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'Siswa',
            'subtitle' => 'Pendaftaran',
        ];
        return view('siswa/view_pendaftaran', $data);
    }
    public function insertSiswa()
    {
        $file = $this->request->getFile('siswa_foto');
        $nama_file = $file->getRandomName();
        $data_siswa = [
            'siswa_nisn'            => $this->request->getPost('siswa_nisn'),
            'siswa_username'        => $this->request->getPost('siswa_username'),
            'siswa_password'        => $this->request->getPost('siswa_password'),
            'siswa_jk'              => $this->request->getPost('siswa_jk'),
            'siswa_tempat_lahir'    => $this->request->getPost('siswa_tempat_lahir'),
            'siswa_tgl_lahir'       => $this->request->getPost('siswa_tgl_lahir'),
            'siswa_agama'           => $this->request->getPost('siswa_agama'),
            'siswa_status'          => $this->request->getPost('siswa_status'),
            'siswa_alamat'          => $this->request->getPost('siswa_alamat'),
            'siswa_telepon'         => $this->request->getPost('siswa_telepon'),
            'siswa_email'           => $this->request->getPost('siswa_email'),
            'siswa_foto'            => $nama_file,
            'siswa_jarak'           => $this->request->getPost('siswa_jarak'),
        ];
        $file->move('foto_siswa/', $nama_file);
        $this->Msiswa->insert($data_siswa);
        $id_siswa = $this->Msiswa->orderBy('siswa_id', 'DESC')->first()['siswa_id'];
        $data_ortu = [
            'ortu_nama_ayah'        => $this->request->getPost('ortu_nama_ayah'),
            'ortu_penddikan_ayah'   => $this->request->getPost('ortu_penddikan_ayah'),
            'ortu_telepon_ayah'     => $this->request->getPost('ortu_telepon_ayah'),
            'ortu_nama_ibu'         => $this->request->getPost('ortu_nama_ibu'),
            'ortu_pendidikan_ibu'   => $this->request->getPost('ortu_pendidikan_ibu'),
            'ortu_telepon_ibu'      => $this->request->getPost('ortu_telepon_ibu'),
            'ortu_nama_wali'        => $this->request->getPost('ortu_nama_wali'),
            'ortu_pekerjaan_wali'   => $this->request->getPost('ortu_pekerjaan_wali'),
            'ortu_pendidikan_wali'  => $this->request->getPost('ortu_pendidikan_wali'),
            'ortu_telepon_wali'     => $this->request->getPost('ortu_telepon_wali'),
            'ortu_siswa_id'         => $id_siswa,
        ];
        $this->Mortu->insert($data_ortu);
        return redirect()->to(base_url('daftar'))->with('success', 'Data Berhasil Ditambahkan');
    }
}
