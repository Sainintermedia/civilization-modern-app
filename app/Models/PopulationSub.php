<?php

namespace App\Models;

use App\Models\Population;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PopulationSub extends Model
{
    use HasFactory;
    protected $table = 'population_subs';
    protected $fillable = [
        'no_nik',
        'nama_kk',
        'tmpt_lahir',
        'tgl_lahir',
        'agama',
        'pendidikan',
        'jns_pekerjaan',
        'gol_darah',
        'sts_perkawinan',
        'tgl_perkawinan',
        'sts_hub_kel',
        'kwn',
        'no_paspor',
        'no_kitap',
        'nm_ayah',
        'nm_ibu',
        'jenkel'
    ];


    public function populations()
    {
        return $this->belongsTo(Population::class, 'no_kk_id');
    }
}