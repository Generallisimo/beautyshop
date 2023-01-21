<!-- подключаем основной файл с разметкой -->
@extends('layouts.master')
<!-- даем название странице -->
@section('title', 'Home')
<!-- вставляем контент -->
@section('content')
    <!-- ##### Blog Wrapper Area Start ##### -->
    <div class="single-blog-wrapper">
@foreach($blogs as $blog)
        <!-- Single Blog Post Thumb -->
        <div class="single-blog-post-thumb img-page">
            <img src="{{asset("/storage/$blog->img")}}" alt="">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="regular-page-content-wrapper section-padding-80">
                        <div class="regular-page-text">
                            <h2>{{$blog->title}}</h2>
                            <p>{{$blog->desc}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endforeach
    </div>
    <!-- ##### Blog Wrapper Area End ##### -->
@endsection