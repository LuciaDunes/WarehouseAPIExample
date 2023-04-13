{{-- @extends('layouts.app')

@section('content') --}}
Ubah Gudang

<div class="card-body">
    <form action="{{ route('warehouses.update', $warehouse->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $warehouse->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @endsection --}}
