<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allProduct()
    {
        $products = Product::with(['brand', 'images', 'colors', 'sizes', 'article', 'promotion', 'category'])
            ->paginate(9); // 9 products per page

        return view('frontend.product.all-product', compact('products'));
    }


    // public function productPage()
    // {
    //     return view('frontend.product.product-page');
    // }

    public function productPage($id)
    {
        $product = Product::with(['brand', 'images', 'colors', 'sizes', 'article', 'promotion', 'category'])
            ->find($id);

        if (!$product) {
            return redirect()->route('frontend.home')->withErrors(['error' => 'Product not available']);
        }

        // Fetch related products based on category
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->latest()
            ->take(6)
            ->get();

        // Fetch recent products without status filtering
        $recentProducts = Product::latest()
            ->take(6)
            ->get();

        return view('frontend.product.product-page', compact('product', 'relatedProducts', 'recentProducts'));
    }




    public function confirmOrder()
    {
        return view('frontend.product.confirm-order');
    }
    public function myCart()
    {
        return view('frontend.product.my-cart');
    }
    public function productLogged()
    {
        return view('frontend.product.product-page-logged-in');
    }

    public function selectAddress()
    {
        return view('frontend.product.select-address');
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
