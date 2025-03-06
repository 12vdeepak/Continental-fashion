<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allProduct()
    {
        return view('frontend.product.all-product');
    }

    public function productPage()
    {
        return view('frontend.product.product-page');
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
