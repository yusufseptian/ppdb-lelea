<?php

namespace App\Models;

use CodeIgniter\Model;

class Mekskul extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_ekskul';
    protected $primaryKey       = 'eks_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'eks_id',
        'eks_nama',
        'eks_kategori',
        'eks_foto',
    ];
}
