<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;
    protected $table = "shows";
    protected $fillable = [
        'name',
        'small_text',
        'long_text',
        'banner',
        'price',
        'people'
    ];
}
