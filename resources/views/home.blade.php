@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Welcome to the Inventory Management System') }}</div>

                    <div class="card-body">
                        <p>{{ __('This system allows you to manage your inventory of products and warehouses.') }}</p>

                        <h4>{{ __('Quick Links') }}</h4>
                        <ul>
                            <li><a href="{{ route('products.index') }}">{{ __('View Products') }}</a></li>
                            <li><a href="{{ route('warehouses.index') }}">{{ __('View Warehouses') }}</a></li>
                            <li><a href="{{ route('inventory.index') }}">{{ __('View Inventory') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
