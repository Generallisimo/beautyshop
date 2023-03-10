<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class SingleProductController extends Controller
{
    public function singleProduct($cat,  $product_id){
        $sessionId=Session::getId();
        Cart::session($sessionId); 
        $cart=Cart::getContent();
        $sum = Cart::getTotal('price');

        $products =Product::where('id', $product_id)->first();
        // dd($product_id);
        return view('products.singleproduct', [
            'products' => $products,
            'cart'=>$cart,
            'sum'=>$sum,
        ]);   
    }
}
