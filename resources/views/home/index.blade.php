<!-- подключаем основной файл с разметкой -->
@extends('layouts.master')
<!-- даем название странице -->
@section('title', 'Home')
<!-- вставляем контент -->
@section('content')

<div class="" style="margin-top: 100px;">
    <div class="row">
        <div class="col-12">
            <div class="popular-slides-slides owl-carousel">
                @foreach($slides as $slide)
                <div class="product-img">
                    <img src="{{asset("/storage/$slide->img")}}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>





    <!-- ##### Начало слайдера ##### -->
    <!-- <section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
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
    </section> -->
    <!-- ##### Конец слайдера ##### -->

    <!-- ##### Топ категории  ##### -->
    <!-- <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center"> -->
                <!-- Карточка -->
                <!-- <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
                        <div class="catagory-content">
                            <a href="#">Clothing</a>
                        </div>
                    </div>
                </div> -->
                <!-- Карточка -->
                <!-- <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-3.jpg);">
                        <div class="catagory-content">
                            <a href="#">Shoes</a>
                        </div>
                    </div>
                </div> -->
                <!-- Карточка -->
                <!-- <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/bg-4.jpg);">
                        <div class="catagory-content">
                            <a href="#">Accessories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ##### Конец товаров ##### -->

    <!-- ##### Картинка со скидкой ##### -->
    <!-- <div class="cta-area">
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
    </div> -->
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

            <div class="container">
            <div class="section-heading text-center">
                        <h2>Popular Blog</h2>
                    </div>
            <div class="row">
            @foreach($blogs as $blog)
                <!-- Товары -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-product-wrapper">
                        <!-- Картинка  -->
                        <div class="product-img">
                            <img style="height: 300px;" src="{{asset("/storage/$blog->img")}}" alt="">                                        
                        </div>
                        
                        <!-- Описание -->
                        <div class="product-description">
                            <span>Ksyusha Beauty</span>
                            <a  href="{{route('blogPage', ['id', $blog->id])}}">                                        
                                <h6 >{{$blog->title}}</h6>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="container">
            <div class="section-heading text-center">
                        <h2>New Products</h2>
                    </div>
            <div class="row">
                        @foreach($news as $new)
                            <!-- Товары -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Картинка  -->
                                    <div class="product-img">
                                        <img src="{{asset("/storage/$new->img")}}" alt="">
                                        <!-- Избраные -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>
                                    <!-- Описание -->
                                    <div class="product-description">
                                        <span>Ksyusha Beauty</span>                                        
                                        <a href="{{route('singleProduct', ['category', $new->id])}}">                                        
                                            <h6>{{$new->title}}</h6>
                                        </a>
                                        <p class="product-price"> {{$new->price}}</p>

                                        <!-- Контент когда наводишь  -->
                                        <div class="hover-content">
                                            <!-- Добавить в избранные -->
                                            <div class="add-to-cart-btn">
                                                <a href="{{route('addCart', ['id' => $new->id])}}" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="container">
            <div class="section-heading text-center">
                        <h2>Why Choose Ksyusha Beauty</h2>
                    </div>
            <div class="row">
                        
                            <!-- Товары -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Картинка  -->
                                    <div class="product-img" style="text-align: center;">
                                        <img style="height: 220px; width: 200px;" src="/img/products-img/f1.png" alt="">
                                        <!-- Избраные -->
                                        <!-- <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div> -->
                                    </div>
                                    <!-- Описание -->
                                    <div class="product-description">
                                        <span>Ksyusha Beauty</span>                                        
                                            <h6 style="text-align: center;">Free / Flat Shipping Rates</h6>
                                        </a>
                                        <p style="text-align: center;" class="product-price"> Free Shipping across Canada for skincare & makeup orders over $500. Flat Shipping fee of $18.75 for skincare & makeup orders below $500. * Custom rates for all orders that include heavy or bulky items.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Картинка  -->
                                    <div class="product-img" style="text-align: center;">
                                        <img style="height: 220px; width: 200px;" src="/img/products-img/f2.png" alt="">
                                        <!-- Избраные -->
                                        <!-- <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div> -->
                                    </div>
                                    <!-- Описание -->
                                    <div class="product-description">
                                        <span>Ksyusha Beauty</span>                                        
                                            <h6 style="text-align: center;">Free / Flat Shipping Rates</h6>
                                        </a>
                                        <p style="text-align: center;" class="product-price"> Free Shipping across Canada for skincare & makeup orders over $500. Flat Shipping fee of $18.75 for skincare & makeup orders below $500. * Custom rates for all orders that include heavy or bulky items.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Картинка  -->
                                    <div class="product-img" style="text-align: center;">
                                        <img style="height: 220px; width: 200px;" src="/img/products-img/f3.png" alt="">
                                        <!-- Избраные -->
                                        <!-- <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div> -->
                                    </div>
                                    <!-- Описание -->
                                    <div class="product-description">
                                        <span>Ksyusha Beauty</span>                                        
                                            <h6 style="text-align: center;">Free / Flat Shipping Rates</h6>
                                        </a>
                                        <p style="text-align: center;" class="product-price"> Free Shipping across Canada for skincare & makeup orders over $500. Flat Shipping fee of $18.75 for skincare & makeup orders below $500. * Custom rates for all orders that include heavy or bulky items.</p>
                                    </div>
                                </div>
                            </div>
                            

        </div>

    </section>
    <!-- ##### Конец ##### -->
    <!-- ##### Бранды ##### -->
    <div style="background-color: #fafaf7;">
        <div class="container" style="margin-top: 100px;">
            <div class="section-heading text-center">
                                <h2>Brands</h2>
                            </div>
    <div class="row" >
        <div class="col-12">
            <div class="popular-brands-slides owl-carousel" >
                    <!-- Бранды лого -->
                    @foreach($brands as $brand)
                    <div class="single-brands-logo">
                        <img src="{{asset("/storage/$brand->img")}}" alt="">
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
    </div>




    <!-- ##### Конец ##### -->
@endsection