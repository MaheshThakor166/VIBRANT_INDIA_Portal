<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function create(Request $request)
    {
       
        $subcategories = Subcategory::all();
        $categories = Category::all(); 
        return view('adminpanel.products.create', compact('subcategories','categories'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'subcategory_id' => 'required|exists:subcategories,id',
            'category_type' => 'required|in:Top,Trending,New Arrival',
             'image_url' => 'required|file|image|max:10240',
            'material' => 'nullable|string',
            'size' => 'nullable|string',
        ]);
    
        $imagePath = null;
    
        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('images', 'public');
        }
    
        Product::create(array_merge($request->all(), ['image_url' => $imagePath]));
    
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    // Show all products
    public function index()
    {
        $products = Product::all();
    
        return view('adminpanel.products.index', compact('products'));
    }
    public function userHomePage()
    {
        $topCategoryProducts = Product::where('category_type', 'Top')->get();
        $trendingCategoryProducts = Product::where('category_type', 'Trending')->get();
        $newArrivalCategoryProducts = Product::where('category_type', 'New Arrival')->get();
       return view('layouts.welcome', compact('topCategoryProducts', 'trendingCategoryProducts', 'newArrivalCategoryProducts'));
    }
public function edit($id)
    {
        $subcategories = Subcategory::all();
        $product = Product::findOrFail($id);
    $categories = Category::all(); // Retrieve all categories

    return view('adminpanel.products.edit', compact('product', 'categories', 'subcategories'));
    }
  public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
       

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'subcategory_id' => 'required|exists:subcategories,id',
            'category_type' => 'required|in:Top,Trending,New Arrival',
            'material' => 'nullable|string',
            'size' => 'nullable|string',
           'image_url' => 'required|file|image|max:10240', 
        ]);
    
        // Check if a new image is uploaded
        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('images', 'public');
            $product->update(array_merge($request->all(), ['image_url' => $imagePath]));
        } 
        else {
            $product->update($request->except('image_url'));
        }
    
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
         
                    }

    // Delete a product
         public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
             }


}
