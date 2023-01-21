<!-- подключаем основной файл с разметкой -->
@extends('layouts.master')
<!-- даем название странице -->
@section('title', 'Product')
<!-- вставляем контент -->
@section('content')

    <!-- ##### Товар ##### -->
    <section  class="single_product_details_area d-flex align-items-center" style="margin-top: 100px;">
        <!-- Картинка -->
        <div class="single_product_thumb clearfix">
            <div class="">             
                   <!-- выодим картинку  -->
                <img src="{{asset("/storage/$products->img")}}" alt="">
            </div>
        </div>
        <!-- Описание -->
        <div class="single_product_desc clearfix" >
            <span>Ksyusha Beauty</span>
            <a href="cart.html">
                <h2>{{$products->title}}</h2>
            </a>
            <!-- для цен со скидкой -->
            <!-- <p class="product-price"><span class="old-price">$65.00</span> $49.00</p> -->
            <!-- воводим цену -->
            <p class="product-price"> ${{$products->price}}</p>
            <p class="product-desc">{{$products->description}}</p>

            <!-- Форма -->
            <form class="cart-form clearfix" method="post">               
                <!-- Корзина и избранные -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Корзина -->
                    <div class="add-to-cart-btn">
                        <a href="{{route('addCart', ['id' => $products->id])}}" class="btn essence-btn">Add to Cart</a>
                    </div>
                    <!-- Избранные -->
                    <!-- <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div> -->
                </div>
            </form>
        </div>
    </section>
    <!-- ##### Конец ##### -->

@endsection