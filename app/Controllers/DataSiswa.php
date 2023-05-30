<?php

namespace App\Controllers;

use App\Models\Mberkas;
use App\Models\Mnilai;
use App\Models\Mortu;
use App\Models\Msiswa;
use App\Models\MTahunAjar;

class DataSiswa extends BaseController
{
    private $Msiswa;
    private $Mortu;
    private $Mnilai;
    private $Mberkas;
    private $Mtahunajar;

    public function __construct()
    {
        $this->Msiswa   = new Msiswa();
        $this->Mortu    = new Mortu();
        $this->Mnilai   = new Mnilai();
        $this->Mberkas  = new Mberkas();
        $this->Mtahunajar = new MTahunAjar();
        helper('form');
        helper('text');
    }
    public function index()
    {
        $dtTA = $this->Mtahunajar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajaran masih kosong');
            return $this->redirectBack();
        }
        $dt_siswa = $this->Msiswa;
        if (session('filterDataSiswa')) {
            if (session('filterDataSiswa')['status'] == 'Mengundurkan Diri') {
                $dt_siswa->onlyDeleted();
            } elseif (session('filterDataSiswa')['status'] == 'All') {
                $dt_siswa->withDeleted();
            } else {
                $dt_siswa->where('siswa_status_pendaftaran', session('filterDataSiswa')['status']);
            }
            $dt_siswa->where('siswa_ta_id', session('filterDataSiswa')['ta']);
            $dtTA = $this->Mtahunajar->find(session('filterDataSiswa')['ta']);
        } else {
            $dt_siswa->where('siswa_ta_id', $dtTA['ta_id'])->withDeleted();
        }
        $dt_siswa = $dt_siswa->findAll();
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Manajemen Data Siswa',
            'dt_siswa' => $dt_siswa,
            'dt_ta' => $dtTA,
            'listTA' => $this->Mtahunajar->findAll()
        ];
        return view('admin/view_data_siswa', $data);
    }
    public function detail($siswa_nisn)
    {
        $dtTA = $this->Mtahunajar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajaran masih kosong');
            return $this->redirectBack();
        }
        $data_siswa = $this->Msiswa
            ->join('tb_orangtua', 'ortu_siswa_id = siswa_id')
            ->join('tb_berkas', 'berkas_siswa_id = siswa_id', 'left')
            ->join('tb_nilai', 'nilai_siswa_id = siswa_id')
            ->join('tb_user', 'siswa_deleted_by=user_id', 'left')
            ->where('siswa_nisn', $siswa_nisn)
            ->withDeleted()->first();
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Detail Data Siswa',
            'agama' => $this->agama,
            'dt_siswa' => $data_siswa,
            'isOpened' => $this->Mtahunajar->isOpened()
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
    public function filter()
    {
        if (!$this->validate([
            'cmbStatusPendaftaran' => 'required|in_list[All,Terdaftar,Diterima,Tidak Diterima,Mengundurkan Diri]',
            'rdTA' => 'required|is_natural_no_zero'
        ])) {
            session()->setFlashdata('danger', 'Mohon lengkapi data dengan sesuai');
            return $this->redirectBack();
        }
        $dtTA = $this->Mtahunajar->find($this->request->getPost('rdTA'));
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajaran tidak ditemukan');
            return $this->redirectBack();
        }
        $tmp = [
            'ta' => $this->request->getPost('rdTA'),
            'status' => ucfirst((string)$this->request->getPost('cmbStatusPendaftaran'))
        ];
        session()->set('filterDataSiswa', $tmp);
        return redirect()->to(base_url('datasiswa'));
    }
    public function resetFilter()
    {
        session()->remove('filterDataSiswa');
        return redirect()->to(base_url('datasiswa'));
    }
    public function filterTahun()
    {
        if (!$this->validate([
            'rdTA' => 'required|is_natural_no_zero'
        ])) {
            session()->setFlashdata('danger', 'Mohon lengkapi data dengan sesuai');
            return $this->redirectBack();
        }
        $dtTA = $this->Mtahunajar->find($this->request->getPost('rdTA'));
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajaran tidak ditemukan');
            return $this->redirectBack();
        }
        if (session('filterDataSiswa')) {
            $tmp = session('filterDataSiswa');
            $tmp['ta'] = $dtTA['ta_id'];
        } else {
            $tmp = [
                'status' => 'All',
                'ta' => $dtTA['ta_id']
            ];
        }
        session()->set('filterDataSiswa', $tmp);
        session()->setFlashdata('success', 'Filter tahun berhasil dirubah');
        return $this->redirectBack();
    }
}
