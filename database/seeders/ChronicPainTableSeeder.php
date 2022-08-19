<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChronicPainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chronic = [
            [
                'nama' => 'JANTUNG'
            ],
            [
                'nama' => 'LEVER'
            ],
            [
                'nama' => 'PARU-PARU'
            ],
            [
                'nama' => 'KANKER'
            ],
            [
                'nama' => 'STROKE'
            ],
            [
                'nama' => 'DIABETES MELITUS'
            ],
            [
                'nama' => 'GINJAL'
            ],
            [
                'nama' => 'MALARIA'
            ],
            [
                'nama' => 'LEPRA/KUSTA'
            ],
            [
                'nama' => 'HIV/AIDS'
            ],
            [
                'nama' => 'GILA/STRESS'
            ],
            [
                'nama' => 'TBC'
            ],
            [
                'nama' => 'ASTHMA'
            ],
            [
                'nama' => 'TIDAK ADA/TIDAK SAKIT'
            ],
        ];
        \DB::table('m_chronic_pains')->insert($chronic);
    }
}
