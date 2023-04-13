@extends('layouts.app')

@section('content')
{{ $product->name }}

<div class="card-body">
    <p>ID: {{ $product->id }}</p>
    <p>Nama: {{ $product->name }}</p>

    <h4>Gudang</h4>
    <ul>
        @foreach ($product->warehouses as $warehouse)
            <li>{{ $warehouse->name }} ({{ $warehouse->pivot->quantity }})</li>
        @endforeach
    </ul>

    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Ubah</a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
