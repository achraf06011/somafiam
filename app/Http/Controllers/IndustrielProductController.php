<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndustrielCategory;
use App\Models\IndustrielSubcategory;
use App\Models\IndustrielProduct;

class IndustrielProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = IndustrielProduct::inRandomOrder()->limit(12)->get();
        $categories = IndustrielCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = IndustrielSubCategory::all();

        return view('industriel.index', compact('products', 'categories', 'subCategories'));
    }

    public function productsList(){
        $products = IndustrielProduct::all();
        $categories = IndustrielCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = IndustrielSubCategory::all();

        return view('industriel.products', compact('products', 'categories', 'subCategories'));
    }

    public function filterByCategory(string $id)
    {
        $category = IndustrielCategory::find($id);
        $subCategories = IndustrielSubCategory::where('category', $id)->get();
        $subCategoryIds = $subCategories->pluck('id');
        $products = IndustrielProduct::whereIn('subCategory', $subCategoryIds)->orderBy('ordre')->get();
        $categories = IndustrielCategory::with('subcategories')->orderBy('ordre')->get();

        return view('industriel.products', [
            'products' => $products, 'subCategories' => $subCategories, 'categories' => $categories, 'category' => $category
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $categoryId = $request->input('category');

        $products = IndustrielProduct::whereHas('subcategory', function ($query) use ($categoryId) {
            $query->where('category', $categoryId);
        })
        ->where('nomProduct', 'LIKE', "%{$query}%")
        ->orderBy('ordre')
        ->get();

        $categories = IndustrielCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = IndustrielSubCategory::all();

        return view('industriel.productsSection', compact('products', 'categories', 'subCategories'));
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
