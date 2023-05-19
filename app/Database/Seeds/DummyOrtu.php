<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DummyOrtu extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 1; $i <= 5; $i++) {
            $data = [
                'ortu_nama_ayah' => $faker->firstNameMale,
                'ortu_pendidikan_ayah' => $faker->randomElement(['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3']),
                'ortu_telepon_ayah' => $faker->phoneNumber,
                'ortu_pekerjaan_ayah' => $faker->randomElement(['Tidak Bekerja', 'PNS', 'TNI', 'Polisi', 'Buruh', 'Petani', 'Pedagang']),
                'ortu_nama_ibu' => $faker->firstNameFemale,
                'ortu_pendidikan_ibu' => $faker->randomElement(['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3']),
                'ortu_telepon_ibu' => $faker->phoneNumber,
                'ortu_pekerjaan_ibu' => $faker->randomElement(['Tidak Bekerja', 'PNS', 'TNI', 'Polisi', 'Buruh', 'Petani', 'Pedagang']),
                'ortu_nama_wali' => $faker->name,
                'ortu_pekerjaan_wali' => $faker->randomElement(['Tidak Bekerja', 'PNS', 'TNI', 'Polisi', 'Buruh', 'Petani', 'Pedagang']),
                'ortu_pendidikan_wali' => $faker->randomElement(['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3']),
                'ortu_telepon_wali' => $faker->phoneNumber,
                'ortu_pekerjaan_wali' => $faker->randomElement(['Tidak Bekerja', 'PNS', 'TNI', 'Polisi', 'Buruh', 'Petani', 'Pedagang']),
                // 'ortu_siswa_id'=>$faker->,
            ];
            $this->db->table('tb_orangtua')->insert($data);
        }
    }
}
