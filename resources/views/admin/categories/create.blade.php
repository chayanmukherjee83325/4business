@extends('layouts.admin')

@section('content')
<div class="admin-header">
    <h1>Add New Category</h1>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-outline">Back</a>
</div>

<div class="card" style="max-width: 600px;">
    <div class="card-body">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Category Name</label>
                <input type="text" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px;">Icon (Emoji or Text)</label>
                <input type="text" name="icon" placeholder="e.g. 🏗️" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
            </div>

            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>
</div>
@endsection
