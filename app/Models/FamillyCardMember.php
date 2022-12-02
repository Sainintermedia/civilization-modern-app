<?php

namespace App\Models;

use App\Models\Sex;
use App\Models\Work;
use App\Models\Blood;
use App\Models\Marry;
use App\Models\Citizen;
use App\Models\Relation;
use App\Models\Religion;
use App\Models\Education;
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

    public function jeniskelamin()
    {
        return $this->hasOne(Sex::class, 'id', 'jenkel');
    }

    public function agamas()
    {
        return $this->hasOne(Religion::class, 'id', 'agama');
    }

    public function edu()
    {
        return $this->hasOne(Education::class, 'id', 'pendidikan');
    }

    public function pekerjaan()
    {
        return $this->hasOne(Work::class, 'id', 'jns_pekerjaan');
    }

    public function darah()
    {
        return $this->hasOne(Blood::class, 'id', 'gol_darah');
    }

    public function hubkel()
    {
        return $this->hasOne(Relation::class, 'id', 'sts_hub_kel');
    }

    public function perkawinan()
    {
        return $this->hasOne(Marry::class, 'id', 'sts_perkawinan');
    }

    public function kwn()
    {
        return $this->hasOne(Citizen::class, 'id', 'sts_kwn');
    }

}