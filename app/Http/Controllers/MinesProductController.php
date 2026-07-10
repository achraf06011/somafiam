<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MinesCategory;
use App\Models\MinesSubcategory;
use App\Models\MinesProduct;

class MinesProductController extends Controller
{
    public function index(Request $request)
    {
        $products = MinesProduct::all();
        $categories = MinesCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = MinesSubcategory::all();

        return view('mines.index', compact('products', 'categories', 'subCategories'));
    }

    public function productsList(){
        $products = MinesProduct::all();
        $categories = MinesCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = MinesSubcategory::all();

        return view('mines.products', compact('products', 'categories', 'subCategories'));
    }

    public function filterByCategory(string $id)
    {
        $category = MinesCategory::find($id);
        $subCategories = MinesSubcategory::where('category', $id)->get();
        $subCategoryIds = $subCategories->pluck('id');
        $products = MinesProduct::whereIn('subCategory', $subCategoryIds)->get();
        $categories = MinesCategory::with('subcategories')->orderBy('ordre')->get();

        return view('mines.products', [
            'products' => $products, 'subCategories' => $subCategories, 'categories' => $categories, 'category' => $category
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $categoryId = $request->input('category');

        $products = MinesProduct::whereHas('subCategory', function ($query) use ($categoryId) {
            $query->where('category', $categoryId);
        })
        ->where('nomProduct', 'LIKE', "%{$query}%")
        ->get();

        $categories = MinesCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = MinesSubcategory::all();

        return view('mines.productsSection', compact('products', 'categories', 'subCategories'));
    }

    public function create() {}
    public function store(Request $request) {}
    public function show(string $id) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}
