<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AduanSita extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'maklumat',
        'ulasan',
    ];   
}
