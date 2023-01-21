<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Slide;
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

        $news = Product::query()->select()->where(['category_id' => 1])->inRandomOrder()->limit(3)->get();
        // dd($news);
        $products = Product::orderBy('id')->get();
        $blogs = Blog::query()->inRandomOrder()->limit(3)->get();
        $brands = Brand::orderBy('id')->get();
        $slides = Slide::orderBy('id')->get();
        // dd($products);
        return view('home.index', [
            'products'=>$products,
            'cart'=>$cart,
            'sum'=>$sum,
            'brands'=>$brands,
            'blogs'=>$blogs,
            'news'=>$news,
            'slides'=>$slides,
        ]);
    }
    
}
