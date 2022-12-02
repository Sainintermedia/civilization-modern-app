<?php

namespace App\Models;

use App\Models\SuratSub;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surat extends Model
{
    use HasFactory;
    protected $table ='surats';

    public function suratsub()
    {
        return $this->hasMany(SuratSub::class, 'no_srt', 'no_srt');
    }
}