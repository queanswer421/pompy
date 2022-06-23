<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heat35 extends Model
{
    use HasFactory;

    protected $fillable = [
         'pump_id', 'p35m20','p35m15','p35m7','p35p2','p35p7','p35p10','p35p12','p35p20'
    ];
    // protected $table = 'heat35';

    public function pump()
    {
        return $this->belongsTo(Pump::class);
    }
}
