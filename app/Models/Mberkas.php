<?php

namespace App\Models;

use CodeIgniter\Model;

class Mberkas extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_berkas';
    protected $primaryKey       = 'berkas_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'berkas_id',
        'berkas_ijazah',
        'berkas_akta',
        'berkas_kk',
        'berkas_ktp_ortu',
        'berkas_rapor',
        'berkas_surat_mutlak',
        'berkas_ijazah_mda',
        'berkas_siswa_id',
    ];
}
