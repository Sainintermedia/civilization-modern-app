<?php

namespace App\Models;

use App\Models\FamillyCardMember;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FamillyCard extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    protected $table = 'familly_cards';
    protected $fillable = [
        'no_kk',
        'kp',
        'rt',
        'rw',
        'kodepos',
        'desa',
        'kecamatan',
        'kabkot',
        'provinsi',
        'user_id'
    ];
    protected $guarded = [];


    public function famillycardmembers()
    {
        return $this->hasMany(FamillyCardMember::class, 'no_kk', 'no_kk');
    }
}