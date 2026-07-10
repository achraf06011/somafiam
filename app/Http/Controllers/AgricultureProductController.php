<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgricultureCategory;
use App\Models\AgricultureSubcategory;
use App\Models\AgricultureProduct;

class AgricultureProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = AgricultureProduct::all();
        $categories = AgricultureCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = AgricultureSubCategory::all();
        
        return view('agriculture.index', compact('products', 'categories', 'subCategories'));
    }

    public function productsList(){
        $products = AgricultureProduct::all();
        $categories = AgricultureCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = AgricultureSubCategory::all();

        return view('agriculture.products', compact('products', 'categories', 'subCategories'));
    }

    public function filterByCategory(string $id)
    {
        $category = AgricultureCategory::find($id);
        $subCategories = AgricultureSubCategory::where('category', $id)->get();
        $subCategoryIds = $subCategories->pluck('id');
        $products = AgricultureProduct::whereIn('subCategory', $subCategoryIds)->get();
        $categories = AgricultureCategory::with('subcategories')->orderBy('ordre')->get();

        return view('agriculture.products', [
            'products' => $products, 'subCategories' => $subCategories, 'categories' => $categories, 'category' => $category
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $categoryId = $request->input('category');

        $products = AgricultureProduct::whereHas('subcategory', function ($query) use ($categoryId) {
            $query->where('category', $categoryId);
        })
        ->where('nomProduct', 'LIKE', "%{$query}%")
        ->get();

        $categories = AgricultureCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = AgricultureSubCategory::all();

        return view('agriculture.productsSection', compact('products', 'categories', 'subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
