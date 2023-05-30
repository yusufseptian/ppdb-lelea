<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Msiswa;
use App\Models\MTahunAjar;

class Ranking extends BaseController
{
    private $modelSiswa = null;
    private $modelTahunAjar = null;

    public function __construct()
    {
        $this->modelSiswa = new Msiswa();
        $this->modelTahunAjar = new MTahunAjar();
    }
    public function index()
    {
        $dtTA = $this->modelTahunAjar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajaran masih kosong');
            return $this->redirectBack();
        }
        $data = [
            'title' => 'Pendaftaran',
            'subtitle' => 'Pendaftaran',
            'dtSiswa' => $this->modelSiswa->getRanking(),
        ];
        return view('admin/view_ranking', $data);
    }
    public function siswa()
    {
        $dtTA = $this->modelTahunAjar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajaran masih kosong');
            return $this->redirectBack();
        }
        $data = [
            'title' => 'Pendaftaran',
            'subtitle' => 'Perangkingan',
            'dtSiswa' => $this->modelSiswa->getRanking(),
            'dtTA' => $dtTA,
            'dtRanking' => $this->modelSiswa->getRankingByID(session('log_auth')['akunID']),
            'isOpened' => $this->modelTahunAjar->isOpened()
        ];
        return view('siswa/view_ranking', $data);
    }
}
