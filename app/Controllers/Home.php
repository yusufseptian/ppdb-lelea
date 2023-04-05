<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MTentang;

class Home extends BaseController
{
    private $db = null;
    private $MTentang = null;

    public function __construct()
    {
        $this->db = \config\Database::connect();
        $this->MTentang = new MTentang;
    }

    public function index()
    {
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Dashboard Admin',
            'tentang' => $this->db->table('tb_profil')->get()->getRowArray(),
            'prestasi' => $this->db->table('tb_prestasi')->get()->getResultArray(),
            'galeri' => $this->db->table('tb_galeri')->get()->getResultArray(),
            'ekskul' => $this->db->table('tb_ekskul')->get()->getResultArray(),
        ];
        return view('siswa/view_home', $data);
    }
}
