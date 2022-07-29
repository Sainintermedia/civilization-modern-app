<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KtpStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ktp = [
            [
                'nama' => 'BELUM REKAM',
                'ktp_el' => '1',
                'status_rekam' => '2',
            ],
            [
                'nama' => 'SUDAH REKAM',
                'ktp_el' => '2',
                'status_rekam' => '3',
            ],
            [
                'nama' => 'CARD PRINTED',
                'ktp_el' => '2',
                'status_rekam' => '4',
            ],
            [
                'nama' => 'PRINT READY RECORD',
                'ktp_el' => '2',
                'status_rekam' => '5',
            ],
            [
                'nama' => 'CARD SHIPPED',
                'ktp_el' => '2',
                'status_rekam' => '6',
            ],
            [
                'nama' => 'SENT FOR CARD PRINTING',
                'ktp_el' => '2',
                'status_rekam' => '7',
            ],
            [
                'nama' => 'CARD ISSUED',
                'ktp_el' => '2',
                'status_rekam' => '8',
            ],
        ];
        \DB::table('m_ktp_statuses')->insert($ktp);
    }
}
