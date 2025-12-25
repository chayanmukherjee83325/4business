@extends('layouts.admin')

@section('content')
<div class="admin-header">
    <h1>Products</h1>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add New Product</a>
</div>

@if(session('success'))
    <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background: #f8f9fa; text-align: left;">
                <th style="padding: 15px; border-bottom: 2px solid #ddd;">Name</th>
                <th style="padding: 15px; border-bottom: 2px solid #ddd;">Category</th>
                <th style="padding: 15px; border-bottom: 2px solid #ddd;">Price</th>
                <th style="padding: 15px; border-bottom: 2px solid #ddd;">Trend</th>
                <th style="padding: 15px; border-bottom: 2px solid #ddd;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr style="border-bottom: 1px solid #eee;">
                <td style="padding: 15px;">
                    <strong>{{ $product->name }}</strong><br>
                    <small style="color: #666;">{{ $product->location }}</small>
                </td>
                <td style="padding: 15px;">{{ $product->category->name }}</td>
                <td style="padding: 15px;">₹{{ number_format($product->price) }}</td>
                <td style="padding: 15px;">{{ ucfirst($product->trend) }}</td>
                <td style="padding: 15px;">
                    <a href="{{ route('admin.products.edit', $product) }}" style="margin-right: 10px; color: var(--color-primary);">Edit</a>
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background: none; border: none; color: #dc3545; cursor: pointer; text-decoration: underline;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div style="padding: 20px;">
        {{ $products->links() }}
    </div>
</div>
@endsection
