<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Get the search input from the request
        $search = $request->input('search');
        
        // Query the products based on the search input, if it exists
        $products = Product::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('description', 'like', "%{$search}%")
                         ->orWhere('price', 'like', "%{$search}%")
                         ->orWhere('stock', 'like', "%{$search}%");
        })->get();
        
        // Return the view with the filtered product data
        return view('adminpanel.products.index', compact('products', 'search'));
    }
    

    public function create() {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('adminpanel.products.create', compact('categories', 'subcategories'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string', // Ensure description is required
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id', // Validate category ID
            'subcategory_id' => 'nullable|exists:subcategories,id', // Validate subcategory ID
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        ]);

        // Handle the uploaded image
        $imagePath = $request->file('image_url')->store('products', 'public'); // This saves the image correctly

        // Create the product using the validated data
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image_url' => $imagePath, // Store the path of the uploaded image
            'category_id' => $request->category_id, // Use category ID
            'subcategory_id' => $request->subcategory_id, // Use subcategory ID
        ]);
    
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }
    public function edit(Product $product)
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('adminpanel.products.edit', compact('product', 'categories', 'subcategories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image is optional on update
        ]);

        // Update the product
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;

        // Handle image update
        if ($request->hasFile('image_url')) {
            // Delete the old image if necessary
            if ($product->image_url) {
                Storage::disk('public')->delete($product->image_url);
            }
            // Store the new image
            $product->image_url = $request->file('image_url')->store('products', 'public');
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        // Delete the product's image from storage
        if ($product->image_url) {
            Storage::disk('public')->delete($product->image_url);
        }

        // Delete the product
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

}
