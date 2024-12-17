<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\CompanyDetail;
use App\Models\Subcategory;
use App\Models\Blog;
use Illuminate\Http\Request;

class ProductController extends Controller
{

   public function create(Request $request)
    {
        $companies = CompanyDetail::select('id', 'name')->get(); // Only fetch id and name
    $subcategories = Subcategory::select('id', 'name')->get(); // Only fetch id and name
    $categories = Category::select('id', 'name')->get(); // Only fetch id and name

    // Pass the data to the view
    return view('adminpanel.products.create', compact('subcategories', 'categories', 'companies'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company_id' => 'required|exists:company_details,id', // Validate company_id exists in company_details table
            'description' => 'required|string',
            'subcategory_id' => 'required|exists:subcategories,id',
            'category_type' => 'required|in:Top,Trending,New Arrival',
            'image_url' => 'required|file|image|max:10240',
            'material' => 'nullable|string',
            'size' => 'nullable|string',
        ]);
    
        $imagePath = null;
    
        // Handle `image_url` upload
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Unique filename
            $imagePath = $image->move(public_path('images'), $imageName); // Store in public/images
            $imagePath = 'images/' . $imageName; // Save the relative path in the database
        }
    
        // Create the product with the company_id
        Product::create(array_merge($request->only([
            'name',
            'company_id', // Include company_id in the product creation
            'description',
            'subcategory_id',
            'category_type',
            'material',
            'size',
        ]), [
            'image_url' => $imagePath,
        ]));
    
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully');
    }
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
    
        // Validate incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'subcategory_id' => 'required|exists:subcategories,id',
            'category_type' => 'required|in:Top,Trending,New Arrival',
            'material' => 'nullable|string',
            'size' => 'nullable|string',
            'companyname' => 'required|string|max:255', // Add validation for company name
            'logo_url' => 'nullable|file|image|max:10240', // Add validation for logo
            'image_url' => 'nullable|file|image|max:10240', // Image is optional during update
        ]);
    
        $updateData = $request->except(['image_url', 'logo_url']); // Exclude file fields from the data array
    
        // Handle image_url update
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
    
        // Handle logo_url update
        if ($request->hasFile('logo_url')) {
            // Delete old logo if it exists
            if ($product->logo_url && file_exists(public_path($product->logo_url))) {
                unlink(public_path($product->logo_url));
            }
    
            // Store new logo
            $logo = $request->file('logo_url');
            $logoName = time() . '_' . $logo->getClientOriginalName(); // Unique filename for logo
            $logo->move(public_path('logos'), $logoName); // Save to public/logos
            $updateData['logo_url'] = 'logos/' . $logoName; // Save relative path in the database
        }
    
        // Update the product with the new data
        $product->update($updateData);
    
        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
       }
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
                 $product = Product::with(['company', 'category', 'subcategory'])->findOrFail($id);
             
                 // Pass the product details to the view
                 return view('productdetails', compact('product'));
             }
    public function getSuggestions(Request $request)
             {
                 $query = $request->input('query');
                 $category = $request->input('category');
         
                 $suggestions = [];
         
                 if ($category === 'Products') {
                     // Fetch product suggestions
                     $suggestions = Product::where('name', 'LIKE', "%{$query}%")
                         ->limit(10)
                         ->get(['id', 'name']);
                 } elseif ($category === 'Companies') {
                     // Fetch company suggestions
                     $suggestions = CompanyDetail::where('name', 'LIKE', "%{$query}%")
                         ->limit(10)
                         ->get(['id', 'name']);
                 }
         
                 return response()->json(['suggestions' => $suggestions]);
             }
    public function companyProducts($id)
             {
                 $company = CompanyDetail::findOrFail($id);
                 $products = $company->products; // Assuming a relationship exists: Company hasMany Products
         
                 return view('company.products', compact('company', 'products'));
             }
         
    public function productDetails($id)
             {
                 $product = Product::findOrFail($id);
         
                 return view('productdetails', compact('product'));
             }
 



}
