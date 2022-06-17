<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 100; $i++)
        {
            DB::table('mahasiswa388')->insert([
                'nim' => $faker->randomNumber($nbDigits = 8, $strict = false),
                'nama' => $faker->name(),
                'gender' => $faker->randomElement($array = array ('Pria','Wanita')),
                'jurusan' => $faker->randomElement($array = array ('Filsafat Keilahian','Arsitektur','Desain Produk', 'Biologi',
                            'Manajemen','Akuntansi','Informatika','Sistem Informasi',
                            'Kedokteran','Pendidikan Bahasa Inggris')),
                'bid_minat' => $faker->randomElement($array = array ('Olahraga','Tari','Musik','Marketing dan Investasi','Kesenian'))
            ]);
        }
    }
}

