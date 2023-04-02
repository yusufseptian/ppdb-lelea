<?php

namespace App\Models;

use CodeIgniter\Model;

class Mgaleri extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_galeri';
    protected $primaryKey       = 'galeri_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'galeri_id',
        'galeri_nama',
        'galeri_foto',
    ];
}
