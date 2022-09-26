<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;
    protected $table = 'populations';
    protected $fillable = [
        'no_kk',
        'no_nik',
        'nama_kk',
        'kp',
        'rt',
        'rw',
        'kodepos',
        'desa',
        'kecamatan',
        'kabkot',
        'provinsi',
    ];

}