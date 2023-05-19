<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DummyBerkas extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 1; $i <= 14; $i++) {
            $data = [
                'berkas_ijazah' => $faker->file($source = 'C:\Users\CYBER REMOTE1\Downloads\tb_berkas', $target = 'C:\xampp\htdocs\ppdb-lelea\public\ijazah_siswa', false),
                'berkas_akta' => $faker->file($source = 'C:\Users\CYBER REMOTE1\Downloads\tb_berkas', $target = 'C:\xampp\htdocs\ppdb-lelea\public\akta_siswa', false),
                'berkas_kk' => $faker->file($source = 'C:\Users\CYBER REMOTE1\Downloads\tb_berkas', $target = 'C:\xampp\htdocs\ppdb-lelea\public\kk_siswa', false),
                'berkas_ktp_ortu' => $faker->file($source = 'C:\Users\CYBER REMOTE1\Downloads\tb_berkas', $target = 'C:\xampp\htdocs\ppdb-lelea\public\ktp_ortu_siswa', false),
                'berkas_rapor' => $faker->file($source = 'C:\Users\CYBER REMOTE1\Downloads\tb_berkas', $target = 'C:\xampp\htdocs\ppdb-lelea\public\rapor_siswa', false),
                'berkas_surat_mutlak' => $faker->file($source = 'C:\Users\CYBER REMOTE1\Downloads\tb_berkas', $target = 'C:\xampp\htdocs\ppdb-lelea\public\surat_mutlak_siswa', false),
                'berkas_ijazah_mda' => $faker->file($source = 'C:\Users\CYBER REMOTE1\Downloads\tb_berkas', $target = 'C:\xampp\htdocs\ppdb-lelea\public\ijazah_mda_siswa', false),
                // 'berkas_siswa_id'
            ];
            $this->db->table('tb_berkas')->insert($data);
        }
    }
}
