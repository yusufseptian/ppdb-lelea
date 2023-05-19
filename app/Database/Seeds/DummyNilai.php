<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DummyNilai extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 1; $i <= 14; $i++) {
            $data = [
                'nilai_ipa' => $faker->numberBetween($min = 60, $max = 98),
                'nilai_mtk' => $faker->numberBetween($min = 60, $max = 98),
                'nilai_indo' => $faker->numberBetween($min = 60, $max = 98),
            ];
            $this->db->table('tb_nilai')->insert($data);
        }
    }
}
