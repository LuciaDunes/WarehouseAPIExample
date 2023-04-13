<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryHistory extends Model
{
    protected $table = 'inventory_history';


    public function inventory()
    {

        return $this->belongsTo(Inventory::class);
    }
}
