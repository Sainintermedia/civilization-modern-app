<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitizenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $citizen = [
            [
                'nama' => 'WNI'
            ],
            [
                'nama' => 'WNA'
            ],
            [
                'nama' => 'DUA KEWARGANEGARAAN'
            ],
        ];
        \DB::table('m_citizens')->insert($citizen);
    }
}
