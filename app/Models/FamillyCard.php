<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class FamillyCard extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    protected $table = 'familly_cards';
    protected $fillable = [
        'no_kk',
        'no_nik',
        'nama',
        'kp',
        'rt',
        'rw',
        'kodepos',
        'desa',
        'kecamatan',
        'kabkot',
        'provinsi',
        'jenkel',
        'tgl_lahir',
        'tmpt_lahir',
        'agama',
        'pendidikan',
        'jns_pekerjaan',
        'gol_darah',
        'sts_perkawinan',
        'tgl_perkawinan',
        'sts_hub_kel',
        'sts_kwn',
        'sts_mati',
        'nm_ayah',
        'nm_ibu',
        'nik_ayah',
        'nik_ibu',
    ];
    protected $guarded = [];
}