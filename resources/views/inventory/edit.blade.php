@extends('layouts.app')

@section('content')
Ubah Inventori

<div class="card-body">
    <form action="{{ route('inventory.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="product_id">Produk</label>
            <select name="product_id" id="product_id" class="form-control" required>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" {{ $item->product_id == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="warehouse_id">Gudang</label>
            <select name="warehouse_id" id="warehouse_id" class="form-control" required>
                @foreach ($warehouses as $warehouse)
                    <option value="{{ $warehouse->id }}" {{ $item->warehouse_id == $warehouse->id ? 'selected' : '' }}>{{ $warehouse->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $item->quantity }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
