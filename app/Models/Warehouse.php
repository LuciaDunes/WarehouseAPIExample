<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'inventory')->withPivot('quantity');
    }
}
