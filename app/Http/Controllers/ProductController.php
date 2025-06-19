<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('brand', 'category')->get();
        return view('pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        $categories = Category::all();
        $brands = Brand::all();
        return view('pages.products.create', compact('categories', 'brands'));
=======
        $brands = Brand::all();
        $categories = Category::all();

        return view('pages.products.create', compact('brands', 'categories'));
>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        dd($request->all());
=======
        // ✅ Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        // ✅ Create Product
        Product::create($validated);

        // ✅ Redirect with success
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('pages.products.edit', compact('product', 'brands', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
        ]);

        $product->update($validated); // ✅ model binding பண்ணியதால் direct update பண்ணலாம்

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product1)
    {
        $product1->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
