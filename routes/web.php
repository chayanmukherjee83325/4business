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

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
});
