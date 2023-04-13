@extends('layouts.app')

@section('content')
Inventori

<div class="card-body">
    <a href="{{ route('inventory.create') }}" class="btn btn-primary mb-3">Buat Inventori</a>

    <form action="{{ route('inventory.index') }}" method="GET" class="mb-3">
        <div class="form-group">
            <label for="product_id">Produk</label>
            <select name="product_id" id="product_id" class="form-control">
                <option value="">Seluruh Produk</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" {{ request('product_id') == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="warehouse_id">Gudang</label>
            <select name="warehouse_id" id="warehouse_id" class="form-control">
                <option value="">Seluruh Gudang</option>
                @foreach ($warehouses as $warehouse)
                    <option value="{{ $warehouse->id }}" {{ request('warehouse_id') == $warehouse->id ? 'selected' : '' }}>{{ $warehouse->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cari</button>
    </form>
    @foreach ($inventory as $item) @endforeach
        ID	Product	Warehouse	Quantity	Actions
        {{ $item->id }}	{{ $item->product->name }}	{{ $item->warehouse->name }}	{{ $item->quantity }}
        Lihat Ubah
@csrf
    @method('DELETE') Hapus

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
