<?php

namespace App\Controllers;

use App\Models\Msiswa;
use App\Models\Muser;

use App\Controllers\BaseController;
use App\Models\MTahunAjar;

class Siswa extends BaseController
{
    private $validation;
    private $modelSiswa;
    private $modelAdmin;
    private $modelTahunAjar;

    public function __construct()
    {
        $this->validation = \config\Services::validation();
        $this->modelSiswa  = new Msiswa();
        $this->modelAdmin  = new Muser();
        $this->modelTahunAjar = new MTahunAjar();
        helper('form');
        helper('text');
    }
    public function index()
    {
        $dtTA = $this->modelTahunAjar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajaran masih kosong');
            return $this->redirectBack();
        }
        $siswa_nisn = session('log_auth')['akunNisn'];
        $data_siswa = $this->modelSiswa
            ->join('tb_orangtua', 'ortu_siswa_id = siswa_id')
            ->join('tb_berkas', 'berkas_siswa_id = siswa_id')
            ->join('tb_nilai', 'nilai_siswa_id = siswa_id')
            ->where('siswa_ta_id', $dtTA['ta_id'])
            ->where('siswa_nisn', $siswa_nisn)->first();
        $data = [
            'title' => 'Siswa',
            'subtitle' => 'Dashboard Siswa',
            'dt_siswa' => $data_siswa,
            'dtRanking' => $this->modelSiswa->getRankingByID($data_siswa['siswa_id']),
            'dtTA' => $dtTA,
            'isOpened' => $this->modelTahunAjar->isOpened()
        ];
        return view('siswa/view_dashboard', $data);
    }
    public function pengunduranDiri()
    {
        $dtTA = $this->modelTahunAjar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajaran masih kosong');
            return $this->redirectBack();
        }
        if (!$this->modelTahunAjar->isOpened()) {
            session()->setFlashdata('danger', 'Saat ini bukan masa pendaftaran, untuk melakukan pengunduran diri silahkan mendatangi pihak sekolah');
            return $this->redirectBack();
        }
        if (!$this->validate([
            'txtAlasan' => 'required'
        ])) {
            session()->setFlashdata('danger', 'Mohon isi alasan anda mengundurkan diri');
            return $this->redirectBack();
        }
        $data = ['siswa_alasan_pengunduran' => $this->request->getPost('txtAlasan')];
        $this->modelSiswa->update(session('log_auth')['akunID'], $data);
        if ($this->modelSiswa->delete(session('log_auth')['akunID'])) {
            session()->setFlashdata('success', 'Akun anda telah di non-aktifkan');
            return redirect()->to(base_url('auth/logout_siswa'));
        }
        session()->setFlashdata('danger', 'Pengunduran diri gagal. Silahkan coba lagi nanti');
        return $this->redirectBack();
    }
}
