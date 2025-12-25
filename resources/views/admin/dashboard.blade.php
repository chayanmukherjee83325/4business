@extends('layouts.admin')

@section('content')
    <div class="admin-header">
        <h1>Dashboard</h1>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
        <div class="card">
            <div class="card-body">
                <h3 style="margin: 0; font-size: 2rem; color: var(--color-primary);">{{ $stats['products'] }}</h3>
                <p style="margin: 5px 0 0; color: #666;">Total Products</p>
                <a href="{{ route('admin.products.index') }}" style="font-size: 0.8rem; text-decoration: none;">Manage Products →</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 style="margin: 0; font-size: 2rem; color: var(--color-secondary);">{{ $stats['categories'] }}</h3>
                <p style="margin: 5px 0 0; color: #666;">Categories</p>
                <a href="{{ route('admin.categories.index') }}" style="font-size: 0.8rem; text-decoration: none;">Manage Categories →</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h3 style="margin: 0; font-size: 2rem; color: var(--color-dark);">{{ $stats['orders'] }}</h3>
                <p style="margin: 5px 0 0; color: #666;">Orders (Demo)</p>
            </div>
        </div>
    </div>

    <div style="margin-top: 40px;">
        <h2>Running Low?</h2>
        <p>This is a placeholder for low stock alerts or recent activity.</p>
    </div>
@endsection
