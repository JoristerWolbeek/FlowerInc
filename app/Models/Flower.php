<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function warehouses()
    {
        return $this->belongsToMany(Warehouse::class, Stock::class, "flower_id");
    }
}
