<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disability extends Model
{
    protected $table = 'm_disabilities';
    protected $fillable = ['nama'];
    use HasFactory;
}
