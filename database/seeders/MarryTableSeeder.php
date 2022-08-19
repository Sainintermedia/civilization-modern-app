<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marry = [
            [
                'nama' => 'BELUM KAWIN'
            ],
            [
                'nama' => 'KAWIN'
            ],
            [
                'nama' => 'CERAI HIDUP'
            ],
            [
                'nama' => 'CERAI MATI'
            ],
        ];
        \DB::table('m_marries')->insert($marry);
    }
}
