<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use PhpParser\Node\Expr\AssignOp\Concat;

class DummySiswa extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 1; $i <= 5; $i++) {
            $data = [
                'siswa_nisn' => $faker->isbn10,
                'siswa_password' => '1234',
                'siswa_nama' => $faker->name,
                'siswa_sekolah_asal' => $faker->randomElement(['SD N 1 NUNUK', 'SD N 1 JAMBAK', 'SD N 2 TUGU', 'SD N 3 TELAGASARI', 'SD N BUNDER', 'SD N 2 RANCASARI']),
                'siswa_jk' => $faker->randomElement(['Laki-Laki', 'Perempuan']),
                'siswa_tempat_lahir' => $faker->state,
                'siswa_tgl_lahir' => $faker->date($format = 'Y-m-d', $max = '2010-12-12'),
                'siswa_agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
                'siswa_status' => $faker->randomElement(['Anak Kandung', 'Anak Angkat']),
                'siswa_alamat' => $faker->address,
                'siswa_telepon' => $faker->phoneNumber,
                'siswa_email' => $faker->freeEmail,
                'siswa_foto' => $faker->file($source = 'C:\Users\CYBER REMOTE1\Downloads\gambar bebas\foto profile\faces', $target = 'C:\xampp\htdocs\ppdb-lelea\public\foto_siswa', false),
                'siswa_jarak' => $faker->numberBetween($min = 1, $max = 15),
                'siswa_token' => $faker->regexify('[A-Z]{3}[0-4]{3}'),
                // 'siswa_status_pendaftaran' => $faker->
            ];
            $this->db->table('tb_siswa')->insert($data);
        }
    }
}
