<?php

namespace App\Models;

use CodeIgniter\Model;

class Mortu extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_orangtua';
    protected $primaryKey       = 'ortu_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'ortu_id',
        'ortu_nama_ayah',
        'ortu_pendidikan_ayah',
        'ortu_telepon_ayah',
        'ortu_pekerjaan_ayah',
        'ortu_nama_ibu',
        'ortu_pendidikan_ibu',
        'ortu_telepon_ibu',
        'ortu_pekerjaan_ibu',
        'ortu_nama_wali',
        'ortu_pekerjaan_wali',
        'ortu_pendidikan_wali',
        'ortu_telepon_wali',
        'ortu_pekerjaan_wali',
        'ortu_siswa_id',
    ];
}
