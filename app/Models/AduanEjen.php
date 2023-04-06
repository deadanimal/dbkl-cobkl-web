<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AduanEjen extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'ejen',
        'laporan',
        'status',
    ];       
}
