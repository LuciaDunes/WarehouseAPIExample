<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('warehouses')->get();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->save();

        return response()->json(['message' => 'Produk sukses dibuat!']);
    }

    public function show($id)
    {
        $product = Product::with('warehouses')->find($id);
        return response()->json([$product]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->save();

        return response()->json(['message' => 'Produk berhasil diperbarui!']);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return response()->json(['message' => 'Produk berhasil dihapus!']);
    }
}
