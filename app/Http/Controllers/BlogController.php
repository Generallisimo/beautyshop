<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class BlogController extends Controller
{
    public function blog(){
        $sessionId=Session::getId();
        Cart::session($sessionId); 
        $cart=Cart::getContent();
        $sum = Cart::getTotal('price');

        $blogs = Blog::orderBy('id')->get();
        return view('blog.index', [
            'cart'=>$cart,
            'sum'=>$sum,
            'blogs'=>$blogs,
        ]);
    }
    public function blogPage($cat, $blog){
        $sessionId=Session::getId();
        Cart::session($sessionId); 
        $cart=Cart::getContent();
        $sum = Cart::getTotal('price');
        
        $blogs = Blog::where('id', $blog)->get();
        // dd($blogs);
        // $items = Blog::where('id', $blogs)->get();
        return view('blog.page', [
            'cart'=>$cart,
            'sum'=>$sum,
            'blogs'=>$blogs,
        ]);
    }
}
