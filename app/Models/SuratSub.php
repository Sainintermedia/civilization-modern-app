<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratSub extends Model
{
    use HasFactory;
    protected $table = 'surat_subs';

    public function surats()
    {
        return $this->belongsTo(Surat::class, 'no_srt', 'no_srt');
    }
}