<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }

    public function warehouses()
    {
        return $this->belongsToMany(Warehouse::class, 'inventory')->withPivot('quantity');
    }
}
