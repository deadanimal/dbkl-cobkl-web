<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AduanBersemuka extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'title',
        'ringkasan',
        'tarikh',
        'user_id'
    ];   

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }    
}
