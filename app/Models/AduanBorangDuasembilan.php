<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AduanBorangDuasembilan extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'pegawai',
        'pengarah',
    ];        
}
