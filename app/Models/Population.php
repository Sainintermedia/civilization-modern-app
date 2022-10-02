<?php

namespace App\Models;

use App\Models\PopulationSub;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Village;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;
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

    public function provinces()
    {
        return $this->hasOne(Province::class, 'code', 'provinsi');
    }

    public function cities()
    {
        return $this->hasOne(City::class, 'code', 'kabkot');
    }

    public function village()
    {
        return $this->hasOne(Village::class, 'code', 'desa');
    }

    public function district()
    {
        return $this->hasOne(District::class, 'code', 'kecamatan');
    }

}