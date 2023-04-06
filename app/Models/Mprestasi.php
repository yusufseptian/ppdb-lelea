<?php

namespace App\Models;

use CodeIgniter\Model;

class Mprestasi extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_prestasi';
    protected $primaryKey       = 'p_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'p_id',
        'p_nama',
        'p_keterangan',
        'p_tahun',
        'p_tingkat',
        'p_prestasi',
        'p_foto',
    ];
}
