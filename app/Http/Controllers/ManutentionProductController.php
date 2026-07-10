<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManutentionCategory;
use App\Models\ManutentionSubcategory;
use App\Models\ManutentionProduct;

class ManutentionProductController extends Controller
{
    public function index(Request $request)
    {
        $products = ManutentionProduct::all();
        $categories = ManutentionCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = ManutentionSubcategory::all();

        return view('manutention.index', compact('products', 'categories', 'subCategories'));
    }

    public function productsList(){
        $products = ManutentionProduct::all();
        $categories = ManutentionCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = ManutentionSubcategory::all();

        return view('manutention.products', compact('products', 'categories', 'subCategories'));
    }

    public function filterByCategory(string $id)
    {
        $category = ManutentionCategory::find($id);
        $subCategories = ManutentionSubcategory::where('category', $id)->get();
        $subCategoryIds = $subCategories->pluck('id');
        $products = ManutentionProduct::whereIn('subCategory', $subCategoryIds)->get();
        $categories = ManutentionCategory::with('subcategories')->orderBy('ordre')->get();

        return view('manutention.products', [
            'products' => $products, 'subCategories' => $subCategories, 'categories' => $categories, 'category' => $category
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $categoryId = $request->input('category');

        $products = ManutentionProduct::whereHas('subCategory', function ($query) use ($categoryId) {
            $query->where('category', $categoryId);
        })
        ->where('nomProduct', 'LIKE', "%{$query}%")
        ->get();

        $categories = ManutentionCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = ManutentionSubcategory::all();

        return view('manutention.productsSection', compact('products', 'categories', 'subCategories'));
    }

    public function create() {}
    public function store(Request $request) {}
    public function show(string $id) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}
