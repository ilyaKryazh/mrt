<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Filters\ProductFilter;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::select('id','name','brand_id','cost','description','img_url');
        $brands = Brand::all();
        $products = (new ProductFilter($request, $products))->apply()->toBase()->get();

        return view('pages.catalog', compact('products','brands', 'request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $id)
    {
        if($id){
        $product = Product::findOrFail(1);
        return view('pages.product-details', ['product' => $product]);
        }
        return abort(404);
    }
}
