<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Blog;
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
        $image = $request->file('image_url');
        $imageName = time() . '_' . $image->getClientOriginalName(); // Unique filename
        $imagePath = $image->move(public_path('images'), $imageName); // Store in public/images
        $imagePath = 'images/' . $imageName; // Save the relative path in the database
    }

    Product::create(array_merge($request->all(), ['image_url' => $imagePath]));

    return redirect()->route('admin.products.index')->with('success', 'Product created successfully');
}

    // Show all products
    public function index()
    {
        $products = Product::all();
    
        return view('adminpanel.products.index', compact('products'));
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
            'image_url' => 'nullable|file|image|max:10240', // Image is optional during update
        ]);
    
        $updateData = $request->except('image_url');
    
        // Check if a new image is uploaded
        if ($request->hasFile('image_url')) {
            // Delete old image if it exists
            if ($product->image_url && file_exists(public_path($product->image_url))) {
                unlink(public_path($product->image_url));
            }
    
            // Store new image
            $image = $request->file('image_url');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Unique filename
            $image->move(public_path('images'), $imageName); // Save to public/images
            $updateData['image_url'] = 'images/' . $imageName; // Save relative path in the database
        }
    
        $product->update($updateData);
    
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    }
    

    // Delete a product
         public function destroy($id)
       {
         $product = Product::findOrFail($id);
          $product->delete();

           return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully');
             }

            public function userHomePage()
             {
                 $topCategoryProducts = Product::where('category_type', 'Top')->get();
                 $trendingCategoryProducts = Product::where('category_type', 'Trending')->take(4)->get();
                 $newArrivalCategoryProducts = Product::where('category_type', 'New Arrival')->take(8)->get();
                 $blogs = Blog::all();
                return view('layouts.welcome', compact('topCategoryProducts', 'trendingCategoryProducts', 'newArrivalCategoryProducts','blogs'));
             }
             public function topCategoryPage()
             {
                 $topCategoryProducts = Product::where('category_type', 'Top')->get();
               
                return view('innertopcategory', compact('topCategoryProducts'));
             }

             public function trendingCategoryPage()
             {
                $trendingCategoryProducts = Product::where('category_type', 'Trending')->get();
               
                return view('alltrendingcategory', compact('trendingCategoryProducts'));
             }

             public function newArrivalCategoryPage()
             {
             $newArrivalCategoryProducts = Product::where('category_type', 'New Arrival')->get();
               
                return view('allnewarrival', compact('newArrivalCategoryProducts'));
             }
             public function show($id)
             {
                 // Retrieve the product by its ID
                 $product = Product::findOrFail($id);
             
                 // Pass the product details to the view
                 return view('productdetails', compact('product'));
             }
             


}
