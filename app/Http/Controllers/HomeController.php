<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class HomeController extends Controller
{
    public function home(){
        $sessionId=Session::getId();
        Cart::session($sessionId); 
        $cart=Cart::getContent();
        $sum = Cart::getTotal('price');

        $products = Product::orderBy('id')->get();
        // dd($products);
        return view('home.index', [
            'products'=>$products,
            'cart'=>$cart,
            'sum'=>$sum,
        ]);
    }
}
