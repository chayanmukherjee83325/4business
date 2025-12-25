<?php

use App\Models\Category;

Route::get('/', function () {
    $categories = Category::all();
    return view('home', compact('categories'));
});

Route::get('/category/{slug}', function ($slug) {
    $category = Category::where('slug', $slug)->with('products')->firstOrFail();
    return view('category.show', compact('category'));
})->name('category.show');
