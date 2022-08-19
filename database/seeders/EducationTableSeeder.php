<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education = [
            [
                'nama' => 'BELUM MASUK TK/KELOMPOK BERMAIN'
            ],
            [
                'nama' => 'SEDANG TK/KELOMPOK BERMAIN'
            ],
            [
                'nama' => 'TIDAK PERNAH SEKOLAH'
            ],
            [
                'nama' => 'SEDANG SD/SEDERAJAT'
            ],
            [
                'nama' => 'TIDAK TAMAT SD/SEDERAJAT'
            ],
            [
                'nama' => 'SEDANG SLTP/SEDERAJAT'
            ],
            [
                'nama' => 'SEDANG SLTA/SEDERAJAT'
            ],
            [
                'nama' => 'SEDANG  D-1/SEDERAJAT'
            ],
            [
                'nama' => 'SEDANG D-2/SEDERAJAT'
            ],
            [
                'nama' => 'SEDANG D-3/SEDERAJAT'
            ],
            [
                'nama' => 'SEDANG  S-1/SEDERAJAT'
            ],
            [
                'nama' => 'SEDANG S-2/SEDERAJAT'
            ],
            [
                'nama' => 'SEDANG S-3/SEDERAJAT'
            ],
            [
                'nama' => 'SEDANG SLB A/SEDERAJAT'
            ],
            [
                'nama' => 'SEDANG SLB B/SEDERAJAT'
            ],
            [
                'nama' => 'SEDANG SLB C/SEDERAJAT'
            ],
            [
                'nama' => 'TIDAK DAPAT MEMBACA DAN MENULIS HURUF LATIN/ARAB'
            ],
            [
                'nama' => 'TIDAK SEDANG SEKOLAH'
            ],
        ];
        \DB::table('m_educations')->insert($education);
    }
}
