{{-- @extends('layouts.app')

@section('content') --}}
Ubah Produk

<div class="card-body">
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
