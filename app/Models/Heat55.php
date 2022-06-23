<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heat55 extends Model
{
    use HasFactory;
    protected $fillable = [
        'p55m20','p55m15','p55m7','p55p2','p55p7','p55p10','p55p12','p55p20'
   ];

   public function pump()
   {
       return $this->belongsTo(Pump::class, 'pump_id');
   }
}
