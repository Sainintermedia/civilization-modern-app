<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\FamillyCard;
use Illuminate\Database\Seeder;
use App\Models\FamillyCardMember;

class DataKeluargaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Factory::create();
            $jumlahdata = 10000;
            for ($i=1; $i <= $jumlahdata; $i++) {
                $data = [
                    'no_kk' => $faker->numberBetween($min = 1, $max = 1000),
                    'no_nik' => $faker->unique()->numberBetween($min = 3603021404970001, $max = 360302149990001),
                    'nama' => $faker->name(),
                    'jenkel' => $faker->numberBetween($min = 1, $max = 2),
                    'tgl_lahir' => $faker->date('Y_m_d'),
                    'tmpt_lahir' => $faker->city(),
                    'agama' => $faker->numberBetween($min = 1, $max = 7),
                    'pendidikan' => $faker->numberBetween($min = 1, $max = 16),
                    'jns_pekerjaan' => $faker->numberBetween($min = 1, $max = 80),
                    'sts_perkawinan' => $faker->numberBetween($min = 1, $max = 4),
                    'tgl_perkawinan' => $faker->date('Y_m_d'),
                    'gol_darah' => $faker->numberBetween($min = 1, $max = 13),
                    'sts_hub_kel' => $faker->numberBetween($min = 1, $max = 11),
                    'sts_kwn' => $faker->numberBetween($min = 1, $max = 3),
                    'nm_ayah' => $faker->firstNameMale(),
                    'nm_ibu' => $faker->firstNameFemale(),
                    'nik_ayah' => $faker->unique()->numberBetween($min = 3603021505220003, $max = 3603021599921003),
                    'nik_ibu' => $faker->unique()->numberBetween($min = 3603021505220003, $max = 3603021999221003),
                    // 'sts_mati' => $faker->numberBetween($min = 0, $max = 1),
                    'no_paspor' => $faker->unique()->numberBetween($min = 1000000, $max = 5000000),
                    'no_kitap' => $faker->unique()->numberBetween($min = 1000000, $max = 5000000),
                    'user_id' => $faker->numberBetween($min = 1, $max = 10),
                    'created_at' => $faker->dateTime(),
                ];
                $alamat = [
                    'no_kk' => $faker->unique()->numberBetween($min = 3603021505220003, $max = 3603021509991003),
                    'kp' => $faker->country(),
                    'rt' => $faker->numberBetween($min = 1, $max = 6),
                    'rw' => $faker->numberBetween($min = 1, $max = 6),
                    'kodepos' => $faker->numberBetween($min = 15610, $max = 19990),
                    'desa' => $faker->numberBetween($min = 3603022001, $max = 3603022001),
                    'kecamatan' => $faker->numberBetween($min = 360302, $max = 360302),
                    'kabkot' => $faker->numberBetween($min = 3603, $max = 3603),
                    'provinsi' => $faker->numberBetween($min = 36, $max = 36),
                ];

                FamillyCardMember::create($data);
                FamillyCard::create($alamat);
            }

    }
}