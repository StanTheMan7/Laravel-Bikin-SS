<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitleDescription extends Model
{
    use HasFactory;
    protected $table = "title_descriptions";
    protected $fillable = ['title','description'];

}
