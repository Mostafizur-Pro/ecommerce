<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create()
    {
        return view('dashboard/eCommerce/addProduct/addProduct');
    }
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_title' => 'required|string|max:255',
            'product_price' => 'required|numeric',
            'product_details' => 'required|array',
            'product_details.*' => 'required|string|max:255',
            'product_category' => 'required|string|max:255',
            'product_images' => 'nullable|array|max:3',
            'product_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Validate image files
        ]);

        // Process product details
        $details = json_encode($request->product_details);

        // Process product category
        $category = $request->product_category;

        // Handle product image uploads
        $imagePaths = [];
        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $image) {
                $path = $image->move('assets/product'); // Store image in storage/app/public/product_images
                $imagePaths[] = $path;
            }
        }

        // Create new product record
        $product = Products::create([
            'name' => $request->product_name,
            'title' => $request->product_title,
            'price' => $request->product_price,
            'details' => $details,
            'category' => $category,
            'images' => json_encode($imagePaths) // Store image paths as JSON array
        ]);

        // Optionally, you can return a response or redirect
        return redirect()->route('products.create')->with('success', 'Product created successfully!');
    }
}
