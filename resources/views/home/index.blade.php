<!-- подключаем основной файл с разметкой -->
@extends('layouts.master')
<!-- даем название странице -->
@section('title', 'Home')
<!-- вставляем контент -->
@section('content')
    <!-- ##### Начало слайдера ##### -->
    <section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content">
                        <h6>asoss</h6>
                        <h2>New Collection</h2>
                        <a href="#" class="btn essence-btn">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Конец слайдера ##### -->

    <!-- ##### Топ категории  ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Карточка -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                        <div class="catagory-content">
                            <a href="#">Clothing</a>
                        </div>
                    </div>
                </div>
                <!-- Карточка -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
                        <div class="catagory-content">
                            <a href="#">Shoes</a>
                        </div>
                    </div>
                </div>
                <!-- Карточка -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-4.jpg);">
                        <div class="catagory-content">
                            <a href="#">Accessories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Конец товаров ##### -->
    <!-- ##### Картинка со скидкой ##### -->
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(img/bg-img/bg-5.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>-60%</h6>
                                <h2>Global Sale</h2>
                                <a href="#" class="btn essence-btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Конец ##### -->
    <!-- ##### Популярные товары ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Popular Products</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <!-- Товары -->
                        @foreach($products as $product)
                        <div class="single-product-wrapper">
                            <!-- Картинка -->
                            <div class="product-img">
                                <img src="{{asset("/storage/$product->img")}}" alt="">
                                <!-- Наведение на картинкуу  -->
                                <!-- <img class="hover-img" src="img/product-img/product-2.jpg" alt=""> -->
                                <!-- Добавить в избранные -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Описание -->
                            <div class="product-description">
                                <span>Ksyusha Beauty</span><br>
                                <!-- переходим по категории товара -->
                                <span><a href="{{route('showCategory',$product->category['alias'])}}">Category: {{$product->category['title']}}</a></span>
                                <a href="{{route('singleProduct', ['category', $product->id])}}">
                                    <h6>{{$product->title}}</h6>
                                </a>
                                <p class="product-price">${{$product->price}}</p>
                                <!-- Наведешь -->
                                <div class="hover-content">
                                    <!-- Добавить в корзину -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{route('addCart', ['id' => $product->id])}}" class="btn essence-btn">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Конец ##### -->
    <!-- ##### Бранды ##### -->
    <div class="brands-area d-flex align-items-center justify-content-between">
        <!-- Бранды лого -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand1.png" alt="">
        </div>
        <!-- Бранды лого -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand2.png" alt="">
        </div>
        <!-- Бранды лого -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand3.png" alt="">
        </div>
        <!-- Бранды лого -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand4.png" alt="">
        </div>
        <!-- Бранды лого -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand5.png" alt="">
        </div>
        <!-- Бранды лого -->
        <div class="single-brands-logo">
            <img src="img/core-img/brand6.png" alt="">
        </div>
    </div>
    <!-- ##### Конец ##### -->
@endsection