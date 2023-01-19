<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory($cat_alias){
        $cat = Category::where('alias',$cat_alias)->first();
        $products = Product::where('category_id', $cat->id)->paginate(9);
        // dd($products);
        return view('category.index', [
            'cat'=>$cat,
            'products'=>$products,
        ]);
    }
    public function category(){
        $products = Product::orderBy('id')->paginate(9);
        return view('category.indexs', [
            'products'=>$products
        ]);
    }
}
