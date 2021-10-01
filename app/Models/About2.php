<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About2 extends Model
{
    use HasFactory;
    protected $table = 'about2s' ;

    protected $fillable = [
        'icone', 
        'title',
        'description'
    ];
}
