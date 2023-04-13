<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryHistory extends Model
{
    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
