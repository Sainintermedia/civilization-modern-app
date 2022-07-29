<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blood = [
            [
                'nama' => 'A'
            ],
            [
                'nama' => 'B'
            ],
            [
                'nama' => 'AB'
            ],
            [
                'nama' => 'O'
            ],
            [
                'nama' => 'A+'
            ],
            [
                'nama' => 'A-'
            ],
            [
                'nama' => 'B+'
            ],
            [
                'nama' => 'B-'
            ],
            [
                'nama' => 'AB+'
            ],
            [
                'nama' => 'AB-'
            ],
            [
                'nama' => 'O+'
            ],
            [
                'nama' => 'O-'
            ],
            [
                'nama' => 'TIDAK TAHU'
            ],
        ];
        \DB::table('m_bloods')->insert($blood);
    }
}
