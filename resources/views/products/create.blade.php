{{-- @extends('layouts.app')

@section('content') --}}
Buat Produk

<div class="card-body">
    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Buat</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
