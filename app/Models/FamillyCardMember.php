<?php

namespace App\Models;

use App\Models\FamillyCard;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FamillyCardMember extends Model implements Auditable
{
    use HasFactory;
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
        return $this->hasOne(FamillyCard::class, 'no_kk', 'no_kk');
    }
}