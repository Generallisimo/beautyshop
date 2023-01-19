<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CartController extends Controller
{
    
    // фун-ия для корзины
    public function addCart(Request $request){
        
        $product = Product::query()->where(['id' => $request->id])->first();
        // Session -> Face нужно выбрать для прокидывания сессии
        $sessionId=Session::getId();
        // dd($sessionId);
        Cart::session($sessionId)->add([
            // то что мы хотим добавить в карзину записываем сюда
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->price,
            // кол-во товара
            'quantity' => $request->qty ?? 1,
            // то что не учтено библиотекой
            'attributes' => [
                'image'=> $product->img,
            ],
        ]);
        // нужно вставить перед каждым view вместе с сессией чтобы работало на всех рендингах
        $cart=Cart::getContent();
        // метод который позваляет остаться на странице при нажатии
        return redirect()->back();
    }
    // удаление из корзины
    public function removeCart($id){        

        $sessionId=Session::getId();
        Cart::session($sessionId);
        $cart=Cart::getContent( );
        
        Cart::session($sessionId)->remove($id);
        return redirect()->back();
    }
}
