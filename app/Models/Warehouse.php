<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id',
        'location',
    ];

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }

    public function flowers()
    {
        return $this->belongsToMany(Flower::class, Stock::class, "warehouse_id");
    }
}
