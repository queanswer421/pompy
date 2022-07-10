<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Pump extends Model
{
    use HasFactory;

    protected $fillable = [
        'producer_id', 'line', 'model','power', 'category_id', 'type', 'heat35_id',
        //  'p35m20','p35m15','p35m7','p35p2','p35p7','p35p10','p35p12','p35p20',
        //  'p45m20','p45m15','p45m7','p45p2','p45p7','p45p10','p45p12','p45p20',
        //  'p55m20','p55m15','p55m7','p55p2','p55p7','p55p10','p55p12','p55p20',
         'volume', 'price'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function producer()
    {
        return $this->belongsTo(Producer::class);
    }
    public function heat35()
    {
        return $this->hasOne(Heat35::class);
    }
    public function heat45()
    {
        return $this->hasOne(Heat45::class);
    }
    public function heat55()
    {
        return $this->hasOne(Heat55::class);
    }
}
