<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tovars extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'img',
        'country',
        'model',
        'year',


    ];
}
