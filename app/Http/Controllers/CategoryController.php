<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CategoryController extends Controller
{
    public function showCategory($cat_alias){
        $sessionId=Session::getId();
        Cart::session($sessionId); 
        $cart=Cart::getContent();
        $sum = Cart::getTotal('price');

        $cat = Category::where('alias',$cat_alias)->first();
        $products = Product::where('category_id', $cat->id)->paginate(9);
        // dd($products);
        return view('category.index', [
            'cat'=>$cat,
            'products'=>$products,
            'cart'=>$cart,
            'sum'=>$sum,
        ]);
    }
    public function category(){
        $sessionId=Session::getId();
        Cart::session($sessionId); 
        $cart=Cart::getContent();
        $sum = Cart::getTotal('price');

        $products = Product::orderBy('id')->paginate(9);
        return view('category.indexs', [
            'products'=>$products,
            'cart'=>$cart,
            'sum'=>$sum,
        ]);
    }
}
