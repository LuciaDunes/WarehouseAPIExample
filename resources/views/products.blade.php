@extends("layouts.app")

@section('content')
Products

<div class="card-body">
    <a href="{{route('products.create')}}" class="btn btn-primary mb-3">Create Product</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Gudang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                {{$product->id}}
                {{$product->name}}

                @foreach ($product->warehouses as $warehouse)
                    {{$warehouse->name}} ({{$warehouse->pivot->quantity}})
                @endforeach
                View Edit
                @csrf
                @method('DELETE') Hapus
            @endforeach
        </tbody>
    </table>
</div>
@endsection
