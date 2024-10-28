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
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
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
        $topProducts = Product::where('category_type', 'Top')->get();
        return view('adminpanel.products.index', compact('products','topProducts'));
    }
    public function userHomePage()
    {
          // Fetch products for the top category (adjust the query as needed)
          $topCategoryProducts = Product::where('category_type', 'Top')->get();;
          if ($topCategoryProducts->isEmpty()) {
            $topCategoryProducts = collect(); // Return an empty collection if no products are found
        }

    
          // Pass the products to the home view
          return view('layouts.welcome', compact('topCategoryProducts'));
    }

   
    public function edit($id)
    {
        $product = Product::findOrFail($id);
    $categories = Category::all(); // Retrieve all categories
    $subcategories = Subcategory::where('category_id', $product->category_id)->get(); // Retrieve related subcategories

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
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240', // Optional image validation
        ]);
    
        // Check if a new image is uploaded
        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('images', 'public');
            $product->update(array_merge($request->all(), ['image_url' => $imagePath]));
        } else {
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

    public function getSubcategories($categoryId)
{
    $subcategories = Subcategory::where('category_id', $categoryId)->get();

    return response()->json(['subcategories' => $subcategories]);
}



// public function showTopCategories()
// {
//     $topProducts = Product::where('category_type', 'Top')->get();
//     return view('components.topcategory', compact('topProducts'));
// }


public function showTopCategories()
{
    $topProducts = Product::where('category_type', 'Top')->get();
    if ($topProducts->isEmpty()) {
        return view('components.topcategory', ['topProducts' => []]); // or handle accordingly
    }
    return view('components.topcategory', compact('topProducts'));
}


}
