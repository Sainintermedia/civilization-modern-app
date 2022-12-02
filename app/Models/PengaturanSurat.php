<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaturanSurat extends Model
{
    use HasFactory;
    protected $table = 'm_pengaturan_surats';
    protected $fillable = [
        'kop_srt',
    ];
    protected $guarded =[];
}