<?php

namespace App\Models;

use App\Models\RtRw;
use App\Models\FamillyCardMember;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Village;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FamillyCard extends Model implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    protected $table = 'familly_cards';
    protected $fillable = ['no_kk', 'kp', 'rt', 'rw', 'kodepos', 'desa', 'kecamatan', 'kabkot', 'provinsi', 'user_id'];
    protected $guarded = [];

    public function famillycardmembers()
    {
        return $this->hasMany(FamillyCardMember::class, 'no_kk', 'id');
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

    public function rtrw()
    {
        return $this->hasOne(RtRw::class, 'id', 'id');
    }
}