@extends('layouts.app')

@section('content')

{{ $item->product->name }} - {{ $item->warehouse->name }}

<div class="card-body">
    <p>ID: {{ $item->id }}</p>
    <p>Product: {{ $item->product->name }}</p>
    <p>Warehouse: {{ $item->warehouse->name }}</p>
    <p>Quantity: {{ $item->quantity }}</p>

    <a href="{{ route('inventory.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
    <form action="{{ route('inventory.destroy', $item->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this inventory item?')">Delete</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
