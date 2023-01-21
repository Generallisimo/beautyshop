<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $sessionId=Session::getId();
        Cart::session($sessionId); 
        $cart=Cart::getContent();
        $sum = Cart::getTotal('price');

        return view('contacts.index', [            
            'cart'=>$cart,
            'sum'=>$sum,
        ]);   
    }
}
