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
        'siswa_alasan_ditolak',
        'siswa_alasan_pengunduran',
        'siswa_ta_id',
        'siswa_deleted_at',
        'siswa_deleted_by'
    ];

    // Dates
    protected $useSoftDeletes   = true;
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'siswa_created_at';
    protected $updatedField  = 'siswa_edited_at';
    protected $deletedField  = 'siswa_deleted_at';

    public function getRanking($idTACustom = null)
    {
        $modelTahunAjar = new MTahunAjar();
        $idTA = $modelTahunAjar->getTANow()['ta_id'];
        if (!is_null($idTACustom)) {
            $idTA = $idTACustom;
        }
        $dtSiswa = $this->join('tb_nilai', 'siswa_id=nilai_siswa_id')->where('siswa_ta_id', $idTA)->where('siswa_status_pendaftaran', 'Diterima')->orderBy('siswa_created_at', 'asc')->findAll();
        $maxIPA = $this->select('max(nilai_ipa) as max')->join('tb_nilai', 'siswa_id=nilai_siswa_id')->where('siswa_ta_id', $idTA)->where('siswa_status_pendaftaran', 'Diterima')->first();
        $maxMTK = $this->select('max(nilai_mtk) as max')->join('tb_nilai', 'siswa_id=nilai_siswa_id')->where('siswa_ta_id', $idTA)->where('siswa_status_pendaftaran', 'Diterima')->first();
        $maxIndo = $this->select('max(nilai_indo) as max')->join('tb_nilai', 'siswa_id=nilai_siswa_id')->where('siswa_ta_id', $idTA)->where('siswa_status_pendaftaran', 'Diterima')->first();
        $minJarak = $this->select('min(siswa_jarak) as min')->where('siswa_ta_id', $idTA)->where('siswa_status_pendaftaran', 'Diterima')->first();
        $index = 0;
        foreach ($dtSiswa as $dt) {
            if ($maxIPA['max'] == 0) {
                $nIPA = 1;
            } else {
                $nIPA = $dt['nilai_ipa'] / ($maxIPA['max']);
            }
            if ($maxMTK['max'] == 0) {
                $nMTK = 1;
            } else {
                $nMTK = $dt['nilai_mtk'] / ($maxMTK['max']);
            }
            if ($maxIndo['max'] == 0) {
                $nINDO = 1;
            } else {
                $nINDO = $dt['nilai_indo'] / ($maxIndo['max']);
            }
            if ($dt['siswa_jarak'] == 0) {
                $nJarak = 1;
            } else {
                $nJarak = ($minJarak['min']) / $dt['siswa_jarak'];
            }
            $dtSiswa[$index]['totalNilai'] = (is_int(($nIPA * 0.25) + ($nMTK * 0.25) + ($nINDO * 0.25) + ($nJarak * 0.25))) ? ($nIPA * 0.25) + ($nMTK * 0.25) + ($nINDO * 0.25) + ($nJarak * 0.25) : round(($nIPA * 0.25) + ($nMTK * 0.25) + ($nINDO * 0.25) + ($nJarak * 0.25), 4);
            $index++;
        }
        for ($a = (count($dtSiswa) - 1); $a >= 0; $a--) {
            for ($b = 0; $b < $a; $b++) {
                if ($dtSiswa[$b]['totalNilai'] < $dtSiswa[$b + 1]['totalNilai']) {
                    $tmp = $dtSiswa[$b];
                    $dtSiswa[$b] = $dtSiswa[$b + 1];
                    $dtSiswa[$b + 1] = $tmp;
                }
            }
        }
        return $dtSiswa;
    }

    public function getRankingByID($id)
    {
        $index = 1;
        $dtSiswa = [];
        foreach ($this->getRanking() as $dt) {
            if ($dt['siswa_id'] == $id) {
                $tmp = $dt;
                $tmp['ranking'] = $index;
                $dtSiswa = $tmp;
                break;
            }
            $index++;
        }
        return $dtSiswa;
    }
}
