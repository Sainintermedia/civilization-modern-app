<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            [
                'nama' => 'TETAP'
            ],
            [
                'nama' => 'TIDAK TETAP'
            ],
        ];
        \DB::table('m_statuses')->insert($status);
    }
}
