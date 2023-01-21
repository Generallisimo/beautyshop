<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function singleProduct($cat,  $product_id){
        $products =Product::where('id', $product_id)->first();
        // dd($product_id);
        return view('products.singleproduct', [
            'products' => $products,
        ]);   
    }
}
