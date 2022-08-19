<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BaseStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $base = [
            [
                'nama' => 'HIDUP'
            ],
            [
                'nama' => 'MATI'
            ],
            [
                'nama' => 'PINDAH'
            ],
            [
                'nama' => 'HILANG'
            ],
            [
                'nama' => 'PERGI'
            ],
            [
                'nama' => 'TIDAK VALID'
            ],
        ];
        \DB::table('m_base_statuses')->insert($base);
    }
}
