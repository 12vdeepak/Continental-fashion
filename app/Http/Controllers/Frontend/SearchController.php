<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::with('subcategories')->get();
        $query = $request->input('query'); // Get search query

        if ($query) {
            // Search in 'product_name' column (adjust to match your database structure)
            $results = Product::where('product_name', 'LIKE', "%{$query}%")->with('brands')->get();

            // dd($results);
            return view('frontend.product.search_results', compact('results', 'query', 'categories'));
        }

        $subcategory = SubCategory::findOrFail($request->input('subcategory_id'));
        $products = $subcategory->products()->with('images')->paginate(9);

        return view('frontend.product.index', compact('subcategory', 'categories', 'products'));
    }
}