<?php

namespace App\Models;

use CodeIgniter\Model;

class Msiswa extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_siswa';
    protected $primaryKey       = 'siswa_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'siswa_id',
        'siswa_nisn',
        'siswa_nama',
        'siswa_username',
        'siswa_password',
        'siswa_jk',
        'siswa_tempat_lahir',
        'siswa_tgl_lahir',
        'siswa_agama',
        'siswa_status',
        'siswa_alamat',
        'siswa_telepon',
        'siswa_email',
        'siswa_foto',
        'siswa_jarak',
        'siswa_token',
        'siswa_sekolah_asal',
        'siswa_status_pendaftaran',
        'siswa_alasan_ditolak'
    ];
}
