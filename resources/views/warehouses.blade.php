@extends('layouts.app')

@section('content')
Gudang

<div class="card-body">
    <a href="{{ route('warehouses.create') }}" class="btn btn-primary mb-3">Create Warehouse</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($warehouses as $warehouse)
                <tr>
                    <td>{{ $warehouse->id }}</td>
                    <td>{{ $warehouse->name }}</td>
                    <td>
                        <ul>
                            @foreach ($warehouse->products as $product)
                                <li>{{ $product->name }} ({{ $product->pivot->quantity }})</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <a href="{{ route('warehouses.show', $warehouse->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                        <a href="{{ route('warehouses.edit', $warehouse->id) }}" class="btn btn-sm btn-warning">Ubah</a>
                        <form action="{{ route('warehouses.destroy', $warehouse->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus gudang ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
@endsection
