<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heat45 extends Model
{
    use HasFactory;
    protected $fillable = [
        'p45m20','p45m15','p45m7','p45p2','p45p7','p45p10','p45p12','p45p20'
   ];

   public function pump()
   {
       return $this->belongsTo(Pump::class, 'pump_id');
   }
}
