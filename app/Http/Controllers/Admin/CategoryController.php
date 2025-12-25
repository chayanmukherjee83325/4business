<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|unique:categories,name',
            'icon' => 'nullable',
        ]);

        $attributes['slug'] = Str::slug($attributes['name']);

        Category::create($attributes);

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $attributes = $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'icon' => 'nullable',
        ]);

        $attributes['slug'] = Str::slug($attributes['name']);

        $category->update($attributes);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        // Check for related products? For now just cascade delete or let DB handle it (we set cascadeOnDelete)
        $category->delete();
        return back()->with('success', 'Category deleted.');
    }
}
