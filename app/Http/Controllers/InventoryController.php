<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\InventoryHistory;

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::with('product', 'warehouse')->get();
        return response()->json($inventory);
    }

    public function store(Request $request)
    {
        $inventory = new Inventory;
        $inventory->product_id = $request->product_id;
        $inventory->warehouse_id = $request->warehouse_id;
        $inventory->quantity = $request->quantity;
        $inventory->save();

        $history = new InventoryHistory;
        $history->inventory_id = $inventory->id;
        $history->quantity = $request->quantity;
        $history->type = 'IN';
        $history->save();

        return response()->json(['message' => 'Inventory berhasil dibuat!']);
    }

    public function show($id)
    {
        $inventory = Inventory::with('product', 'warehouse', 'history')->find($id);
        return response()->json($inventory);
    }

    public function update(Request $request, $id)
    {
        $inventory = Inventory::find($id);
        $inventory->quantity = $request->quantity;
        $inventory->save();

        $history = new InventoryHistory;
        $history->inventory_id = $inventory->id;
        $history->quantity = $request->quantity;
        $history->type = 'IN';
        $history->save();

        return response()->json(['message' => 'Inventory berhasil diperbarui!']);
    }

    public function delete($id)
    {
        $inventory = Inventory::find($id);
        $inventory->delete();

        return response()->json(['message' => 'Inventory berhasil dihapus!']);
    }
}
