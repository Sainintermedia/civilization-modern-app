<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $work = [
            [
                'nama' => 'BELUM/TIDAK BEKERJA'
            ],
            [
                'nama' => 'MENGURUS RUMAH TANGGA'
            ],
            [
                'nama' => 'PELAJAR/MAHASISWA'
            ],
            [
                'nama' => 'PENSIUNAN'
            ],
            [
                'nama' => 'PEGAWAI NEGERI SIPIL (PNS)'
            ],
            [
                'nama' => 'TENTARA NASIONAL INDONESIA (TNI)'
            ],
            [
                'nama' => 'KEPOLISIAN RI (POLRI)'
            ],
            [
                'nama' => 'PERDAGANGAN'
            ],
            [
                'nama' => 'PETANI/PEKEBUN'
            ],
            [
                'nama' => 'PETERNAK'
            ],
            [
                'nama' => 'NELAYAN/PERIKANAN'
            ],
            [
                'nama' => 'INDUSTRI'
            ],
            [
                'nama' => 'KONSTRUKSI'
            ],
            [
                'nama' => 'TRANSPORTASI'
            ],
            [
                'nama' => 'KARYAWAN SWASTA'
            ],
            [
                'nama' => 'KARYAWAN BUMN'
            ],
            [
                'nama' => 'KARYAWAN BUMD'
            ],
            [
                'nama' => 'KARYAWAN HONORER'
            ],
            [
                'nama' => 'BURUH HARIAN LEPAS'
            ],
            [
                'nama' => 'BURUH TANI/PERKEBUNAN'
            ],
            [
                'nama' => 'BURUH NELAYAN/PERIKANAN'
            ],
            [
                'nama' => 'BURUH PETERNAKAN'
            ],
            [
                'nama' => 'PEMBANTU RUMAH TANGGA'
            ],
            [
                'nama' => 'TUKANG CUKUR'
            ],
            [
                'nama' => 'TUKANG LISTRIK'
            ],
            [
                'nama' => 'TUKANG BATU'
            ],
            [
                'nama' => 'TUKANG KAYU'
            ],
            [
                'nama' => 'TUKANG SOL SEPATU'
            ],
            [
                'nama' => 'TUKANG LAS/PANDAI BESI'
            ],
            [
                'nama' => 'TUKANG JAHIT'
            ],
            [
                'nama' => 'TUKANG GIGI'
            ],
            [
                'nama' => 'PENATA RIAS'
            ],
            [
                'nama' => 'PENATA BUSANA'
            ],
            [
                'nama' => 'PENATA RAMBUT'
            ],
            [
                'nama' => 'MEKANIK'
            ],
            [
                'nama' => 'SENIMAN'
            ],
            [
                'nama' => 'TABIB'
            ],
            [
                'nama' => 'PARAJI'
            ],
            [
                'nama' => 'PERANCANG BUSANA'
            ],
            [
                'nama' => 'PENTERJEMAH'
            ],
            [
                'nama' => 'IMAM MASJID'
            ],
            [
                'nama' => 'PENDETA'
            ],
            [
                'nama' => 'PASTOR'
            ],
            [
                'nama' => 'WARTAWAN'
            ],
            [
                'nama' => 'USTADZ/MUBALIGH'
            ],
            [
                'nama' => 'JURU MASAK'
            ],
            [
                'nama' => 'PROMOTOR ACARA'
            ],
            [
                'nama' => 'ANGGOTA DPR-RI'
            ],
            [
                'nama' => 'ANGGOTA DPD'
            ],
            [
                'nama' => 'ANGGOTA BPK'
            ],
            [
                'nama' => 'PRESIDEN'
            ],
            [
                'nama' => 'WAKIL PRESIDEN'
            ],
            [
                'nama' => 'ANGGOTA MAHKAMAH KONSTITUSI'
            ],
            [
                'nama' => 'ANGGOTA KABINET KEMENTERIAN'
            ],
            [
                'nama' => 'DUTA BESAR'
            ],
            [
                'nama' => 'GUBERNUR'
            ],
            [
                'nama' => 'WAKIL GUBERNUR'
            ],
            [
                'nama' => 'BUPATI'
            ],
            [
                'nama' => 'WAKIL BUPATI'
            ],
            [
                'nama' => 'WALIKOTA'
            ],
            [
                'nama' => 'WAKIL WALIKOTA'
            ],
            [
                'nama' => 'ANGGOTA DPRD PROVINSI'
            ],
            [
                'nama' => 'ANGGOTA DPRD KABUPATEN/KOTA'
            ],
            [
                'nama' => 'DOSEN'
            ],
            [
                'nama' => 'GURU'
            ],
            [
                'nama' => 'PILOT'
            ],
            [
                'nama' => 'PENGACARA'
            ],
            [
                'nama' => 'NOTARIS'
            ],
            [
                'nama' => 'ARSITEK'
            ],
            [
                'nama' => 'AKUNTAN'
            ],
            [
                'nama' => 'KONSULTAN'
            ],
            [
                'nama' => 'DOKTER'
            ],
            [
                'nama' => 'BIDAN'
            ],
            [
                'nama' => 'PERAWAT'
            ],
            [
                'nama' => 'APOTEKER'
            ],
            [
                'nama' => 'PSIKIATER/PSIKOLOG'
            ],
            [
                'nama' => 'PENYIAR TELEVISI'
            ],
            [
                'nama' => 'PENYIAR RADIO'
            ],
            [
                'nama' => 'PELAUT'
            ],
            [
                'nama' => 'PENELITI'
            ],
            [
                'nama' => 'SOPIR'
            ],
            [
                'nama' => 'PIALANG'
            ],
            [
                'nama' => 'PARANORMAL'
            ],
            [
                'nama' => 'PEDAGANG'
            ],
            [
                'nama' => 'PERANGKAT DESA'
            ],
            [
                'nama' => 'KEPALA DESA'
            ],
            [
                'nama' => 'BIARAWATI'
            ],
            [
                'nama' => 'WIRASWASTA'
            ],
            [
                'nama' => 'LAINNYA'
            ],
        ];
        \DB::table('m_works')->insert($work);
    }
}
