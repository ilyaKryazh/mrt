<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select('id','name', 'cost','package','img_url')->toBase()->get();

        return view('pages.catalog', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $id)
    {
        $product = Product::findOrFail(1);
        return view('pages.product-details', ['product' => $product]);
    }
}
