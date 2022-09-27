<?php

namespace App\Models;

use App\Models\PopulationSub;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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


    public function populationsubs()
    {
        return $this->hasMany(PopulationSub::class, 'no_kk_id');
    }

}