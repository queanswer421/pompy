<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'surface', 'type', 'heatDemand', 'temp', 'cwu', 'heatDemandM15', 'heatDemandM7', 'heatDemandP2'
    ];

}
