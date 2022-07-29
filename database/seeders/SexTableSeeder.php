<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SexTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sex = [
            [
                'nama' => 'LAKI-LAKI'
            ],
            [
                'nama' => 'PEREMPUAN'
            ],
        ];
        \DB::table('m_sexes')->insert($sex);
    }
}
