<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AduanAdukl extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'idadu',
        'status',
        'name',
        'docno',
        'mobileno',
        'email',
        'jenis',
        'pihakdiadu',
        'project',
        'address',
        'description',

        'berkaitan',
        'klassifikasi',
        'mediasi',
    ];    
}
