<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProsporeusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prosporeus = [
            [
                'nama' => 'Keluarga Pra Sejahtera'
            ],
            [
                'nama' => 'Keluarga Sejahtera I'
            ],
            [
                'nama' => 'Keluarga Sejahtera II'
            ],
            [
                'nama' => 'Keluarga Sejahtera III'
            ],
            [
                'nama' => 'Keluarga Sejahtera III Plus'
            ],
        ];
        \DB::table('m_prosporeus_families')->insert($prosporeus);
    }
}
