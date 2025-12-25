<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'location' => 'required',
            'price' => 'required|numeric',
            'trend' => 'required|in:up,down,stable',
            'description' => 'nullable',
        ]);

        Product::create($attributes);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $attributes = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required',
            'location' => 'required',
            'price' => 'required|numeric',
            'trend' => 'required|in:up,down,stable',
            'description' => 'nullable',
        ]);

        $product->update($attributes);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Product deleted.');
    }
}
