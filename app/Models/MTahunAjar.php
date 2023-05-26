<?php

namespace App\Models;

use CodeIgniter\Model;

class MTahunAjar extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_tahun_ajaran';
    protected $primaryKey       = 'ta_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'ta_tahun_ajaran', 'ta_kuota', 'ta_mulai_daftar', 'ta_selesai_daftar', 'ta_created_by', 'ta_edited_by'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'ta_created_at';
    protected $updatedField  = 'ta_edited_at';
    protected $deletedField  = 'deleted_at';

    public function getTANow()
    {
        return $this->orderBy('ta_id', 'desc')->first();
    }
}
