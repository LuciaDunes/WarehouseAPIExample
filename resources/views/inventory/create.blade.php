@extends('layouts.app')

@section('content')
Buat Inventori

<div class="card-body">
    <form action="{{ route('inventory.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="product_id">Produk</label>
            <select name="product_id" id="product_id" class="form-control" required>
                <option value="">Pilih Produk</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="warehouse_id">Gudang</label>
            <select name="warehouse_id" id="warehouse_id" class="form-control" required>
                <option value="">Pilih Gudang</option>
                @foreach ($warehouses as $warehouse)
                    <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Buat</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
