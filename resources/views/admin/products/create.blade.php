@extends('layouts.admin')

@section('content')
<div class="admin-header">
    <h1>Add New Product</h1>
    <a href="{{ route('admin.products.index') }}" class="btn btn-outline">Back</a>
</div>

<div class="card" style="max-width: 600px;">
    <div class="card-body">
        <form action="{{ route('admin.products.store') }}" method="POST">
            @csrf
            
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Category</label>
                <select name="category_id" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Product Name</label>
                <input type="text" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Location</label>
                <input type="text" name="location" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Price (₹)</label>
                <input type="number" step="0.01" name="price" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Market Trend</label>
                <select name="trend" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                    <option value="stable">Stable</option>
                    <option value="up">Up (Price Rising)</option>
                    <option value="down">Down (Price Falling)</option>
                </select>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px;">Description</label>
                <textarea name="description" rows="3" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>
</div>
@endsection
