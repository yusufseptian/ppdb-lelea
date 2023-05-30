<?php

namespace App\Controllers;

use App\Models\Msiswa;
use App\Models\Muser;

use App\Controllers\BaseController;
use App\Models\Mberkas;
use App\Models\MTahunAjar;
use Exception;

class Siswa extends BaseController
{
    private $validation;
    private $modelSiswa;
    private $modelAdmin;
    private $modelTahunAjar;
    private $modelBerkas;

    public function __construct()
    {
        $this->validation = \config\Services::validation();
        $this->modelSiswa  = new Msiswa();
        $this->modelAdmin  = new Muser();
        $this->modelTahunAjar = new MTahunAjar();
        $this->modelBerkas = new Mberkas();
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
    public function pengunduranDiri($nisnSiswa)
    {
        $dtTA = $this->modelTahunAjar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajaran masih kosong');
            return $this->redirectBack();
        }
        if (session('log_auth')['akunRole'] == 'siswa') {
            if (!$this->modelTahunAjar->isOpened()) {
                session()->setFlashdata('danger', 'Saat ini bukan masa pendaftaran, untuk melakukan pengunduran diri silahkan mendatangi pihak sekolah');
                return $this->redirectBack();
            }
        }
        if (!$this->validate([
            'txtAlasan' => 'required'
        ])) {
            session()->setFlashdata('danger', 'Mohon isi alasan anda mengundurkan diri');
            return $this->redirectBack();
        }
        if (session('log_auth')['akunRole'] == 'siswa') {
            $dtAkun = $this->modelSiswa->join('tb_berkas', 'berkas_siswa_id=siswa_id')->find(session('log_auth')['akunID']);
        } else {
            $dtAkun = $this->modelSiswa->join('tb_berkas', 'berkas_siswa_id=siswa_id', 'left')->where('siswa_nisn', $nisnSiswa)->where('siswa_ta_id', $dtTA['ta_id'])->first();
            if (empty($dtAkun)) {
                session()->setFlashdata('danger', 'Data siswa tidak ditemukan');
                return $this->redirectBack();
            }
        }
        try {
            unlink('ijazah_siswa/' . $dtAkun['berkas_ijazah']);
        } catch (Exception $e) {
        }
        try {
            unlink('akta_siswa/' . $dtAkun['berkas_akta']);
        } catch (Exception $e) {
        }
        try {
            unlink('kk_siswa/' . $dtAkun['berkas_kk']);
        } catch (Exception $e) {
        }
        try {
            unlink('ktp_ortu_siswa/' . $dtAkun['berkas_ktp_ortu']);
        } catch (Exception $e) {
        }
        try {
            unlink('rapor_siswa/' . $dtAkun['berkas_rapor']);
        } catch (Exception $e) {
        }
        try {
            unlink('surat_mutlak_siswa/' . $dtAkun['berkas_surat_mutlak']);
        } catch (Exception $e) {
        }
        try {
            unlink('ijazah_mda_siswa/' . $dtAkun['berkas_ijazah_mda']);
        } catch (Exception $e) {
        }
        if (!is_null($dtAkun['berkas_id'])) {
            $this->modelBerkas->delete($dtAkun['berkas_id']);
        }
        if (session('log_auth')['akunRole'] == 'siswa') {
            $data = ['siswa_alasan_pengunduran' => $this->request->getPost('txtAlasan')];
        } else {
            $data = [
                'siswa_alasan_pengunduran' => $this->request->getPost('txtAlasan'),
                'siswa_deleted_by' => session('log_auth')['akunID']
            ];
        }
        $this->modelSiswa->update($dtAkun['siswa_id'], $data);
        if ($this->modelSiswa->delete($dtAkun['siswa_id'])) {
            if (session('log_auth')['akunRole'] == 'siswa') {
                session()->setFlashdata('success', 'Akun anda telah di non-aktifkan');
                return redirect()->to(base_url('auth/logout_siswa'));
            } else {
                session()->setFlashdata('success', 'Data calon siswa berhasil dihapus');
                return redirect()->to(base_url('datasiswa'));
            }
        }
        session()->setFlashdata('danger', 'Pengunduran diri gagal. Silahkan coba lagi nanti');
        return $this->redirectBack();
    }
}
