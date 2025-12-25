<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Steel
        $steel = Category::create([
            'name' => 'Steel',
            'slug' => 'steel',
            'icon' => '⚙️',
        ]);

        Product::create([
            'category_id' => $steel->id,
            'name' => 'TMT Bar Fe 500',
            'location' => 'Mandi Gobindgarh',
            'price' => 45000.00,
            'trend' => 'up',
            'description' => 'High quality TMT bars for construction.',
        ]);

        Product::create([
            'category_id' => $steel->id,
            'name' => 'CRC Sheet 2mm',
            'location' => 'Ludhiana',
            'price' => 58500.00,
            'trend' => 'stable',
            'description' => 'Cold Rolled Coils/Sheets.',
        ]);

        // Chemicals
        $chem = Category::create([
            'name' => 'Chemicals',
            'slug' => 'chemicals',
            'icon' => '⚗️',
        ]);

        Product::create([
            'category_id' => $chem->id,
            'name' => 'Sulphuric Acid',
            'location' => 'Ankleshwar',
            'price' => 12500.00,
            'trend' => 'down',
            'description' => 'Industrial grade acid.',
        ]);

        // Cement
        Category::create([
            'name' => 'Cement',
            'slug' => 'cement',
            'icon' => '🏗️',
        ]);
        
        // Energy
        Category::create([
            'name' => 'Energy',
            'slug' => 'energy',
            'icon' => '⚡',
        ]);
    }
}
