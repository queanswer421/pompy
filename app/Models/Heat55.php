<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heat55 extends Model
{
    use HasFactory;
    protected $fillable = [
        'pump_id', 'm20','m15','m7','p2','p7','p10','p12','p20'
   ];

   public function pump()
   {
       return $this->belongsTo(Pump::class, 'pump_id');
   }
}
