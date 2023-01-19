<!DOCTYPE html>
<html lang="en">
<head>
    <!-- основные 4 тега -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Название страницы -->
    <title>@yield('title')</title>
    <!-- Иконка страницы  -->
    <link rel="icon" href="/img/core-img/favicon.ico">
    <link rel="stylesheet" href="/style.css">
    <!-- Стили CSS -->
    <link rel="stylesheet" href="/css/core-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
    <!-- подключаем шапку профиля -->
    @include('layouts.header')
    <!-- контент всталяем сюда -->
    @yield('content')   
    <!-- подключаем футер -->
    @include('layouts.footer')
    <!-- Стили jQuery  -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- Навигация Nav js -->
    <script src="/js/classy-nav.min.js"></script>
    <!-- Активный js -->
    <script src="/js/active.js"></script>
</body>
</html>