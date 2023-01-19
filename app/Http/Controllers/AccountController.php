<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class AccountController extends Controller
{
    // акканут личный
    public function accIndex(){
        $user=Auth::user();
        // dd($user);
        $sessionId=Session::getId();
        Cart::session($sessionId); 
        $cart=Cart::getContent();
        $sum = Cart::getTotal('price');
        return view('account.account', [
            'cart'=>$cart,
            'sum'=>$sum,
            'user'=>$user,
        ]);
    }   
}
