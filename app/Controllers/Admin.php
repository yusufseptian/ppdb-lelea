<?php

namespace App\Controllers;

use App\Models\Msiswa;
use App\Models\MTahunAjar;

class Admin extends BaseController
{
    private $modelSiswa;
    private $modelTahunAjaran;

    public function __construct()
    {
        $this->modelSiswa = new Msiswa();
        $this->modelTahunAjaran = new MTahunAjar();
    }

    public function index()
    {
        $dtTA = $this->modelTahunAjaran->getTANow();
        if (session('filterDataSiswa')) {
            $dtTA = $this->modelTahunAjaran->find(session('filterDataSiswa')['ta']);
        }
        $dtSiswaTerdaftar = $this->modelSiswa->where('siswa_status_pendaftaran', 'Terdaftar');
        if (!empty($dtTA)) {
            $dtSiswaTerdaftar->where('siswa_ta_id', $dtTA['ta_id']);
        }
        $dtSiswaTerdaftar = $dtSiswaTerdaftar->findAll();
        $dtSiswaDiterima = $this->modelSiswa->where('siswa_status_pendaftaran', 'Diterima');
        if (!empty($dtTA)) {
            $dtSiswaDiterima->where('siswa_ta_id', $dtTA['ta_id']);
        }
        $dtSiswaDiterima = $dtSiswaDiterima->findAll();
        $dtSiswaTidakDiterima = $this->modelSiswa->where('siswa_status_pendaftaran', 'Tidak Diterima');
        if (!empty($dtTA)) {
            $dtSiswaTidakDiterima->where('siswa_ta_id', $dtTA['ta_id']);
        }
        $dtSiswaTidakDiterima = $dtSiswaTidakDiterima->findAll();
        $dtSiswaMengundurkanDiri = $this->modelSiswa->onlyDeleted();
        if (!empty($dtTA)) {
            $dtSiswaMengundurkanDiri->where('siswa_ta_id', $dtTA['ta_id']);
        }
        $dtSiswaMengundurkanDiri = $dtSiswaMengundurkanDiri->findAll();
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Dashboard Admin',
            'dtSiswaTerdaftar' => $dtSiswaTerdaftar,
            'dtSiswaDiterima' => $dtSiswaDiterima,
            'dtSiswaTidakDiterima' => $dtSiswaTidakDiterima,
            'dtSiswaMengundurkanDiri' => $dtSiswaMengundurkanDiri,
            'dtTA' => $dtTA,
            'listTA' => $this->modelTahunAjaran->findAll()
        ];
        return view('admin/view_dashboard', $data);
    }
}
