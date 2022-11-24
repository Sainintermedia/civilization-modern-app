<?php

namespace App\Models;

use App\Models\FamillyCard;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Village;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FamillyCardMember extends Model implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    protected $table = 'familly_card_members';
    protected $fillable = [
        'no_kk',
        'no_nik',
        'nama',
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
        'no_paspor',
        'no_kitap',
        'userid',
    ];
    protected $guarded = [];

    public function famillycard()
    {
        return $this->belongsTo(FamillyCard::class, 'no_kk', 'id');
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