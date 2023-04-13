@extends('layouts.app')

@section('content')
{{ $warehouse->name }}

<div class="card-body">
    <p>ID: {{ $warehouse->id }}</p>
    <p>Nama: {{ $warehouse->name }}</p>

    <h4>Produk</h4>
    <ul>
        @foreach ($warehouse->products as $product)
            <li>{{ $product->name }} ({{ $product->pivot->quantity }})</li>
        @endforeach
    </ul>

    <a href="{{ route('warehouses.edit', $warehouse->id) }}" class="btn btn-sm btn-warning">Ubah</a>
    <form action="{{ route('warehouses.destroy', $warehouse->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus gudang ini?')">Hapus </button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
