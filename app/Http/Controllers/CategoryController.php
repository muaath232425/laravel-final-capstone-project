<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD

       $values = Category::all();
       return view('pages.categories.index', compact('values'));
=======
        //   Elequent  ORM
        $values = Category::all();
        // dd($values);
        return view('pages.category.index', compact('values'));
>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view('pages.categories.create');
=======
        return view('pages.category.create');
>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
         $request->validate([
            'category_name' => 'required|string',
            'description' => 'nullable|string|max:255',
        ]);

          Category::create([
=======
        $request->validate([
            'category_name' => 'required|string',
            'description' => 'nullable|string|max:255',

        ]);

        Category::create([
>>>>>>> 85f4aadcfc4c574c7063aab123fd0fab0c93b174
            'category_name' => $request->category_name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
          $request->validate([
            'category_name' => 'required|string',
            'description' => 'nullable|string|max:255',
        ]);

        $category->update([
            'category_name' => $request->category_name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete(); //it will delete the record from the database
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
