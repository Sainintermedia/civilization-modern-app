<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relation = [
            [
                'nama' => 'KEPALA KELUARGA'
            ],
            [
                'nama' => 'SUAMI'
            ],
            [
                'nama' => 'ISTRI'
            ],
            [
                'nama' => 'ANAK'
            ],
            [
                'nama' => 'MENANTU'
            ],
            [
                'nama' => 'CUCU'
            ],
            [
                'nama' => 'ORANGTUA'
            ],
            [
                'nama' => 'MERTUA'
            ],
            [
                'nama' => 'FAMILI LAIN'
            ],
            [
                'nama' => 'PEMBANTU'
            ],
            [
                'nama' => 'LAINNYA'
            ],
        ];
        \DB::table('m_relations')->insert($relation);
    }
}
