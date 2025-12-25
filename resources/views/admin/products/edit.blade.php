@extends('layouts.admin')

@section('content')
<div class="admin-header">
    <h1>Edit Product: {{ $product->name }}</h1>
    <a href="{{ route('admin.products.index') }}" class="btn btn-outline">Back</a>
</div>

<div class="card" style="max-width: 600px;">
    <div class="card-body">
        <form action="{{ route('admin.products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Category</label>
                <select name="category_id" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Product Name</label>
                <input type="text" name="name" value="{{ $product->name }}" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Location</label>
                <input type="text" name="location" value="{{ $product->location }}" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Price (₹)</label>
                <input type="number" step="0.01" name="price" value="{{ $product->price }}" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Market Trend</label>
                <select name="trend" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    <option value="stable" {{ $product->trend == 'stable' ? 'selected' : '' }}>Stable</option>
                    <option value="up" {{ $product->trend == 'up' ? 'selected' : '' }}>Up (Price Rising)</option>
                    <option value="down" {{ $product->trend == 'down' ? 'selected' : '' }}>Down (Price Falling)</option>
                </select>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px;">Description</label>
                <textarea name="description" rows="3" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">{{ $product->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</div>
@endsection
