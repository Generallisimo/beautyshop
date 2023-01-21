<!-- подключаем основной файл с разметкой -->
@extends('layouts.master')
<!-- даем название странице -->
@section('title', 'Checkout')
<!-- вставляем контент -->
@section('content')


<div class="contact-area d-flex align-items-center " style="margin-top: 100px;">
    <div class="my-div">
    <div class="google-map" >
        <div id="googleMap" ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1941.1112382604251!2d-99.43941762888267!3d44.06926142748223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8780d9414559e8bd%3A0x839726235b12fc4e!2zMTAwMyBTRC00NywgRm9ydCBUaG9tcHNvbiwgU0QgNTczMzksINCh0KjQkA!5e0!3m2!1sru!2sge!4v1674308172079!5m2!1sru!2sge" width="900" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>

    <div class="contact-info">
        <h2>How to Find Us</h2>
        <p>Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>

        <div class=" p-contact mt-50">
            <p><span>Address:</span> 10 Suffolk st Soho, London, UK</p>
            <p><span>Telephone:</span> +12 34 567 890</p>
            <p><span>Email:</span> contact@admin.com</p>
        </div>
    </div>
    </div>

</div>

@endsection