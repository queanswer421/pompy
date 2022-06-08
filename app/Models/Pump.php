<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pump extends Model
{
    use HasFactory;

    protected $fillable = [
        'producer', 'model', 'category', 'tempBiwa', 'power35', 'power45', 'power55', 'volume', 'price'
    ];

}
