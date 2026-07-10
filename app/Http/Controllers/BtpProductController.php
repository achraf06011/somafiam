<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BtpCategory;
use App\Models\BtpSubcategory;
use App\Models\BtpProduct;

class BtpProductController extends Controller
{
    public function index(Request $request)
    {
        $products = BtpProduct::all();
        $categories = BtpCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = BtpSubcategory::all();

        return view('btp.index', compact('products', 'categories', 'subCategories'));
    }

    public function productsList(){
        $products = BtpProduct::all();
        $categories = BtpCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = BtpSubcategory::all();

        return view('btp.products', compact('products', 'categories', 'subCategories'));
    }

    public function filterByCategory(string $id)
    {
        $category = BtpCategory::find($id);
        $subCategories = BtpSubcategory::where('category', $id)->get();
        $subCategoryIds = $subCategories->pluck('id');
        $products = BtpProduct::whereIn('subCategory', $subCategoryIds)->get();
        $categories = BtpCategory::with('subcategories')->orderBy('ordre')->get();

        return view('btp.products', [
            'products' => $products, 'subCategories' => $subCategories, 'categories' => $categories, 'category' => $category
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $categoryId = $request->input('category');

        $products = BtpProduct::whereHas('subCategory', function ($query) use ($categoryId) {
            $query->where('category', $categoryId);
        })
        ->where('nomProduct', 'LIKE', "%{$query}%")
        ->get();

        $categories = BtpCategory::with('subcategories')->orderBy('ordre')->get();
        $subCategories = BtpSubcategory::all();

        return view('btp.productsSection', compact('products', 'categories', 'subCategories'));
    }

    public function create() {}
    public function store(Request $request) {}
    public function show(string $id) {}
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}
