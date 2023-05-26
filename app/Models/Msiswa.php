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
        'siswa_ta_id'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'siswa_created_at';
    protected $updatedField  = 'siswa_edited_at';
    protected $deletedField  = 'deleted_at';

    public function getRanking()
    {
        $dtSiswa = $this->join('tb_nilai', 'siswa_id=nilai_siswa_id')->findAll();
        $maxIPA = $this->select('max(nilai_ipa) as max')->join('tb_nilai', 'siswa_id=nilai_siswa_id')->first();
        $maxMTK = $this->select('max(nilai_mtk) as max')->join('tb_nilai', 'siswa_id=nilai_siswa_id')->first();
        $maxIndo = $this->select('max(nilai_indo) as max')->join('tb_nilai', 'siswa_id=nilai_siswa_id')->first();
        $minJarak = $this->select('min(siswa_jarak) as min')->first();
        $index = 0;
        foreach ($dtSiswa as $dt) {
            $nIPA = $dt['nilai_ipa'] / ($maxIPA['max']);
            $nMTK = $dt['nilai_mtk'] / ($maxMTK['max']);
            $nINDO = $dt['nilai_indo'] / ($maxIndo['max']);
            $nJarak = ($minJarak['min']) / $dt['siswa_jarak'];
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
}
