<!-- подключаем основной файл с разметкой -->
@extends('layouts.master')
<!-- даем название странице -->
@section('title', 'panel')
<!-- вставляем контент -->
@section('content')
<!-- личный аккаунт -->
<div class="container" style="margin: 100px auto;">
    <div class="section-heading text-center">
        <h2>My Account</h2>
    </div>
  <form class="row g-3" >
    <div class="col-md-6">
      <label for="inputFirstName4" class="form-label">First Name</label>
      <input type="name" class="form-control" id="inputFirstName4" value="{{$user->name}}" >
    </div>
    <div class="col-md-6">
      <label for="inputLastName5" class="form-label">Last Name</label>
      <input type="name" class="form-control" id="inputLastName5" value="{{$user->lastname}}">
    </div>
    <div class="col-12">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" value="{{$user->email}}">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" value="{{$user->address}}">
    </div>
    <!-- <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div> -->
    <div class="col-md-6">
      <label for="inputPhone" class="form-label">Phone</label>
      <input type="text" class="form-control" id="inputPhone" value="{{$user->phone}}">
    </div>
    <!-- <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div> -->
    <!-- <div class="col-md-2">
      <label for="inputState" class="form-label">State</label>
      <input type="text" class="form-control" id="inputState">
    </div> -->
  </form>
<!-- разлогирование на сайте через личный кабинет -->
  <div class="col-12 mt-2">
    <form method="POST" action="{{ route('logout') }}" style="text-align: center; margin-top:10px;">
    @csrf
      <button type="submit" class="btn btn-primary" style="background-color: #d12cc1; border: #d12cc1;">
        {{ __('Log Out') }}
      </button>
    </form>
  </div>
  




  
</div>
@endsection