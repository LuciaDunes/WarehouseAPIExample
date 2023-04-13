<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = Warehouse::with('products')->get();
        return response()->json($warehouses);
    }

    public function store (Request $request)
    {
        $warehouse = new Warehouse;
        $warehouse->name = $request->name;
        $warehouse->save();

        return response()->json(['message' => 'Warehouse sukses dibuat!']);
    }

    public function show($id)
    {
        $warehouse = Warehouse::with('products')->find($id);
        return response()->json($warehouse);
    }

    public function update(Request $request, $id)
    {
        $warehouse = Warehouse::find($id);
        $warehouse->name = $request->name;
        $warehouse->save();

        return response()->json(['message' => 'Warehouse sukses diperbarui!']);
    }

    public function delete($id)
    {
        $warehouse = Warehouse::find($id);
        $warehouse->delete();

        return response()->json(['message' => 'Warehouse berhasil dihapus!']);
    }
}
