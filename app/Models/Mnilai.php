<?php

namespace App\Models;

use CodeIgniter\Model;

class Mnilai extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_nilai';
    protected $primaryKey       = 'nilai_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nilai_id',
        'nilai_ipa',
        'nilai_mtk',
        'nilai_indo',
        'nilai_siswa_id',
    ];
}
