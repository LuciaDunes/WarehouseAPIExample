<html>
{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Sistem Manajemen Inventaris') }}</div>

                    <div class="card-body">
                        <p>{{ __('Pilih link yang ada dibawah dari produk, gudang, dan inventori') }}</p>

                        <h4>{{ __('Quick Links') }}</h4>
                        <ul>
                            <li><a href="{{ route('products.index') }}">{{ __('Produk') }}</a></li>
                            <li><a href="{{ route('warehouses.index') }}">{{ __('Gudang') }}</a></li>
                            <li><a href="{{ route('inventory.index') }}">{{ __('Inventori') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}
</html>
