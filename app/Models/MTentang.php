<?php

namespace App\Models;

use CodeIgniter\Model;

class MTentang extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_profil';
    protected $primaryKey       = 'profil_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'profil_id',
        'profil_nama',
        'profil_alamat',
        'profil_kepsek',
        'profil_email',
        'profil_kontak',
        'profil_npsb',
        'profil_status',
        'profil_akreditasi',
        'profil_visi',
        'profil_misi',
    ];
}
