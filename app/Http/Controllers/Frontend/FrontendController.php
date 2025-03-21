<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function publicHome()
    {
        $products = Product::with(['brand', 'images', 'colors', 'sizes'])->get();
        $categories = Category::with('subcategories')->get();
        $banners = Banner::all();

        return view('frontend.product.public-home', compact('products', 'categories', 'banners'));
    }

    public function publicPrivateHome()
    {
        $products = Product::with(['brand', 'images', 'colors', 'sizes'])->get();
        $categories = Category::with('subcategories')->get();
        $banners = Banner::all();
        return view('frontend.product.public-home', compact('products', 'categories', 'banners'));
    }

    public function aboutUs()
    {
        $categories = Category::with('subcategories')->get();
        return view('frontend.aboutus', compact('categories'));
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
