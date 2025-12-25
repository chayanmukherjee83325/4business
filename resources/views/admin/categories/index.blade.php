@extends('layouts.admin')

@section('content')
<div class="admin-header">
    <h1>Categories</h1>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add New Category</a>
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
                <th style="padding: 15px; border-bottom: 2px solid #ddd;">Slug</th>
                <th style="padding: 15px; border-bottom: 2px solid #ddd;">Icon</th>
                <th style="padding: 15px; border-bottom: 2px solid #ddd;">Product Count</th>
                <th style="padding: 15px; border-bottom: 2px solid #ddd;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr style="border-bottom: 1px solid #eee;">
                <td style="padding: 15px;"><strong>{{ $category->name }}</strong></td>
                <td style="padding: 15px;">{{ $category->slug }}</td>
                <td style="padding: 15px;">{{ $category->icon ?? '-' }}</td>
                <td style="padding: 15px;">{{ $category->products()->count() }}</td>
                <td style="padding: 15px;">
                    <a href="{{ route('admin.categories.edit', $category) }}" style="margin-right: 10px; color: var(--color-primary);">Edit</a>
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure? This will delete all associated products!')">
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
        {{ $categories->links() }}
    </div>
</div>
@endsection
