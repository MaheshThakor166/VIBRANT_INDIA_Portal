<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
        $kitchenware = Category::create(['name' => 'Kitchenware']);
        $hotelware = Category::create(['name' => 'Hotelware']);
        $houseware = Category::create(['name' => 'Houseware']);

        // Subcategories
        $cookware = Subcategory::create(['name' => 'Cookware', 'category_id' => $kitchenware->id]);
        $tableware = Subcategory::create(['name' => 'Tableware', 'category_id' => $kitchenware->id]);

        // Products
        Product::create([
            'name' => 'Modern Kettle',
            'description' => 'Electric kettle for fast boiling',
            'price' => 200.00,
            'subcategory_id' => $cookware->id,
            'category_type' => 'Top',
            'stock' => 15,
            'images' => 'modern_kettle.jpg'
        ]);

        Product::create([
            'name' => 'Classic Toaster',
            'description' => 'Stainless steel toaster',
            'price' => 150.00,
            'subcategory_id' => $tableware->id,
            'category_type' => 'Trending',
            'stock' => 20,
            'images' => 'classic_toaster.jpg'
        ]);
    }
}
