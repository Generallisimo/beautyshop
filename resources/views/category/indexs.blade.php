<!-- подключаем основной файл с разметкой -->
@extends('layouts.master')
<!-- даем название странице -->
@section('title', 'cat')
<!-- вставляем контент -->
@section('content')
    <!-- ##### Название категории товара ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(/img/bg-img/breadcumb.jpg); margin-top:100px;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Categories</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Конец ##### -->

    <!-- ##### Категории ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Раздел ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Название категории -->
                            <!-- <h6 class="widget-title mb-30">Catagories</h6> -->

                            <!--  Категории  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Виды категории -->
                                    <li data-toggle="collapse" data-target="#clothing">
                                        <a href="#" class="widget-title">Category</a>
                                        <ul class="sub-menu collapse show" id="clothing">
                                        @foreach($categories as $category)
                                            <li><a href="{{route('showCategory', $category->alias)}}">{{$category->title}}</a></li>
                                        @endforeach
                                        </ul>
                                    </li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Кол-во товаров -->
                                    <div class="total-products">
                                        <p><span>{{$products->count()}}</span> products found</p>
                                    </div>
                                    <!-- Сортировка товара -->
                                    <!-- <div class="product-sorting d-flex">
                                        <p>Sort by:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Highest Rated</option>
                                                <option value="value">Newest</option>
                                                <option value="value">Price: $$ - $</option>
                                                <option value="value">Price: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Товары -->
                            @foreach($products as $product)
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Картинка  -->
                                    <div class="product-img">
                                        <img src="{{asset("/storage/$product->img")}}" alt="">
                                        <!-- Наводение на картинку -->
                                        <!-- <img class="hover-img" src="/img/product-img/product-2.jpg" alt=""> -->

                                        <!-- Скидка -->
                                        <!-- <div class="product-badge offer-badge">
                                            <span>-30%</span>
                                        </div> -->
                                        <!-- Избраные -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>
                                    <!-- Описание -->
                                    <div class="product-description">
                                        <span>Ksyusha Beauty</span>
                                        <span><a href="{{route('showCategory',$product->category['alias'])}}">{{$product->category['title']}}</a></span>
                                        <a href="{{route('singleProduct', ['category', $product->id])}}">                                        
                                            <h6>{{$product->title}}</h6>
                                        </a>
                                        <p class="product-price"> ${{$product->title}}</p>

                                        <!-- Контент когда наводишь  -->
                                        <div class="hover-content">
                                            <!-- Добавить в избранные -->
                                            <div class="add-to-cart-btn">
                                                <a href="#" class="btn essence-btn">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Пагинации -->
                    {{$products->links('category.pagination')}}
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Конец ##### -->
    @endsection