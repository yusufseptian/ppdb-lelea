<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Tentang extends BaseController
{
    private $db = null;

    public function __construct()
    {
        $this->db = \config\Database::connect();
    }
    public function index()
    {
        $data = [
            'title' => 'Tentang',
            'subtitle' => 'Manajemen Tentang',
            'tentang' => $this->db->table('tb_profil')->get()->getRowArray(),
        ];
        return view('admin/view_tentang', $data);
    }
}
