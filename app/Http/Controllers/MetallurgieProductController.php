<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetallurgieCategory;
use App\Models\MetallurgieSubcategory;
use App\Models\MetallurgieProduct;

class MetallurgieProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = MetallurgieProduct::all();
        $categories = MetallurgieCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = MetallurgieSubcategory::all();
        
        return view('metallurgie.index', compact('products', 'categories', 'subCategories'));
    }

    public function productsList(){
        $products = MetallurgieProduct::all();
        $categories = MetallurgieCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = MetallurgieSubcategory::all();

        return view('metallurgie.products', compact('products', 'categories', 'subCategories'));
    }

    public function filterByCategory(string $id)
    {
        $category = MetallurgieCategory::find($id);
        $subCategories = MetallurgieSubcategory::where('category', $id)->get();
        $subCategoryIds = $subCategories->pluck('id');
        $products = MetallurgieProduct::whereIn('subCategory', $subCategoryIds)->get();
        $categories = MetallurgieCategory::with('subcategories')->orderBy('ordre')->get();

        return view('metallurgie.products', [
            'products' => $products, 'subCategories' => $subCategories, 'categories' => $categories, 'category' => $category
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $categoryId = $request->input('category');

        $products = MetallurgieProduct::whereHas('subcategory', function ($query) use ($categoryId) {
            $query->where('category', $categoryId);
        })
        ->where('nomProduct', 'LIKE', "%{$query}%")
        ->get();

        $categories = MetallurgieCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = MetallurgieSubcategory::all();

        return view('metallurgie.productsSection', compact('products', 'categories', 'subCategories'));
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
