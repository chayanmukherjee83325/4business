@extends('layouts.app')

@section('title', $category->name . ' Prices - OfBusiness Clone')

@section('content')
<div class="container" style="padding-top: 30px; display: flex; gap: 30px;">
    <!-- Sidebar -->
    <aside style="width: 250px; flex-shrink: 0; display: none; @media(min-width: 768px) { display: block; }">
        <div style="background: white; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); overflow: hidden;">
            <div style="padding: 15px; background: var(--color-dark); color: white; font-weight: bold;">
                Top Categories
            </div>
            <ul style="list-style: none; padding: 0; margin: 0;">
                @foreach(\App\Models\Category::all() as $cat)
                <li style="border-bottom: 1px solid #eee;">
                    <a href="{{ route('category.show', $cat->slug) }}" style="display: block; padding: 12px 15px; text-decoration: none; color: #333; {{ request()->is('category/'.$cat->slug) ? 'background: #f8f9fa; color: var(--color-primary); font-weight: 500;' : '' }}">
                        {{ $cat->icon }} {{ $cat->name }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <div style="flex: 1;">
        <div style="margin-bottom: 20px;">
            <h1 style="margin: 0;">{{ $category->name }} Prices</h1>
            <p style="color: #666;">Live prices for {{ $category->name }} across various locations.</p>
        </div>

        <div style="background: white; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); overflow: hidden;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background: #f8f9fa; border-bottom: 2px solid #eee;">
                        <th style="padding: 15px; text-align: left;">Product</th>
                        <th style="padding: 15px; text-align: left;">Location</th>
                        <th style="padding: 15px; text-align: right;">Price</th>
                        <th style="padding: 15px; text-align: center;">Trend</th>
                        <th style="padding: 15px; text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($category->products as $product)
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 15px;">
                            <div style="font-weight: 500;">{{ $product->name }}</div>
                            <div style="font-size: 0.85em; color: #888;">{{ $product->description }}</div>
                        </td>
                        <td style="padding: 15px; color: #555;">{{ $product->location }}</td>
                        <td style="padding: 15px; text-align: right; font-weight: bold; color: var(--color-dark);">
                            ₹{{ number_format($product->price) }}
                        </td>
                        <td style="padding: 15px; text-align: center;">
                            @if($product->trend == 'up')
                                <span style="color: #28a745;">▲ Up</span>
                            @elseif($product->trend == 'down')
                                <span style="color: #dc3545;">▼ Down</span>
                            @else
                                <span style="color: #6c757d;">▬ Stable</span>
                            @endif
                        </td>
                        <td style="padding: 15px; text-align: center;">
                            <button class="btn btn-primary" style="padding: 5px 15px; font-size: 0.9em;">Buy</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" style="padding: 30px; text-align: center; color: #888;">
                            No products found in this category.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
