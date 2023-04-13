<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';

    protected $fillable = [
        'product_id',
        'warehouse_id',
        'quantity'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function history()
    {
        return $this->hasMany(InventoryHistory::class);
    }
}
