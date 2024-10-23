<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;


class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trending = Category::where('type', 'trending')->first();
        $top = Category::where('type', 'top')->first();
        $newArrival = Category::where('type', 'new_arrival')->first();
       

        $subcategories = [
            'Stainless Steel Houseware',
            'Kitchenware',
            'Tableware',
            'Houseware',
            'Gifts and Decor',
            'Utensils',
            'Plasticware',
            'Hotelware',
            'Kitchen Appliances'
        ];
        
        // Loop through each subcategory and create it for all three categories
        foreach ($subcategories as $subcategoryName) {
            Subcategory::create(['name' => $subcategoryName, 'category_id' => $trending->id]);
            Subcategory::create(['name' => $subcategoryName, 'category_id' => $top->id]);
            Subcategory::create(['name' => $subcategoryName, 'category_id' => $newArrival->id]);
        }
        
        echo "Subcategories created successfully!";


    }
}
