<!-- подключаем основной файл с разметкой -->
@extends('layouts.master')
<!-- даем название странице -->
@section('title', 'Home')
<!-- вставляем контент -->
@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Fashion Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Wrapper Area Start ##### -->
    <div class="blog-wrapper section-padding-80">
        <div class="container">
            <div class="row">
               @foreach($blogs as $blog)
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img style="height: 400px;" src="{{asset("/storage/$blog->img")}}" alt="">
                        <!-- Post Title -->
                        <div class="post-title">
                            <a href="#">{{$blog->title}}</a>
                        </div>
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <!-- Post Title -->
                            <div class="hover-post-title">
                                <a href="#">If you are interested in learning about this article, then proceed further. </a>
                            </div>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus purus dignissim convallis.</p> -->
                            <a href="{{route('blogPage', ['id', $blog->id])}}">Continue reading <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper Area End ##### -->
@endsection