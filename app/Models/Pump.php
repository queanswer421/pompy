<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Pump extends Model
{
    use HasFactory;

    protected $fillable = [
        'producer_id', 'line', 'model', 'category_id', 'type_id',
        'heat35_id', 'heat45_id', 'heat55_id', 'volume', 'price'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
    public function producer()
    {
        return $this->belongsTo(Producer::class, 'producer_id');
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
