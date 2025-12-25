@extends('layouts.app')

@section('title', 'OfBusiness Clone - Sourcing, Financing, Data')

@section('content')
<section class="hero">
    <div class="container">
        <h1 style="font-size: 3rem; margin-bottom: 20px;">India's Largest B2B Platform</h1>
        <p style="font-size: 1.2rem; opacity: 0.9; margin-bottom: 30px;">Raw Material Procurement & Credit for SMEs</p>
        <div style="display: flex; justify-content: center; gap: 15px;">
            <a href="#" class="btn btn-primary">Explore Categories</a>
            <a href="#" class="btn btn-secondary">Get Credit</a>
        </div>
    </div>
</section>

<div class="stat-strip">
    <div class="container stat-grid">
        <div>
            <div class="stat-value">500K+</div>
            <div>Orders Delivered</div>
        </div>
        <div>
            <div class="stat-value">2M+</div>
            <div>SMEs Served</div>
        </div>
        <div>
            <div class="stat-value">35+</div>
            <div>Active Locations</div>
        </div>
    </div>
</div>

<section class="container" style="padding-top: 50px; padding-bottom: 50px;">
    <h2 style="text-align: center; margin-bottom: 40px; color: var(--color-dark);">Explore Our Categories</h2>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 30px;">
        @foreach($categories as $category)
        <div class="card">
            <div style="height: 150px; background: #e9ecef; display: flex; align-items: center; justify-content: center;">
                <span style="font-size: 3rem; color: #adb5bd;">{{ $category->icon ?? '📦' }}</span>
            </div>
            <div class="card-body">
                <h3 style="margin-top: 0;">{{ $category->name }}</h3>
                <p style="color: var(--color-text-muted);">View latest prices and trends</p>
                <a href="{{ route('category.show', $category->slug) }}" class="btn btn-outline" style="width: 100%; text-align: center;">View Prices</a>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section style="background: var(--color-white); padding: 60px 0;">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 40px; color: var(--color-dark);">Our Services</h2>
        <div style="display: flex; gap: 30px; flex-wrap: wrap;">
            <div class="card" style="flex: 1; min-width: 300px;">
                <div class="card-body" style="text-align: center; padding: 40px;">
                    <h3 style="color: var(--color-primary);">Sourcing</h3>
                    <p>Get the best prices for raw materials delivered to your doorstep.</p>
                </div>
            </div>
             <div class="card" style="flex: 1; min-width: 300px;">
                <div class="card-body" style="text-align: center; padding: 40px;">
                    <h3 style="color: var(--color-secondary);">Financing</h3>
                    <p>Working capital loans and credit lines for your business growth.</p>
                </div>
            </div>
             <div class="card" style="flex: 1; min-width: 300px;">
                <div class="card-body" style="text-align: center; padding: 40px;">
                    <h3 style="color: var(--color-dark);">Data (Oxyzo)</h3>
                    <p>Real-time market intelligence and pricing trends.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
