<!-- подключаем основной файл с разметкой -->
@extends('layouts.master')
<!-- даем название странице -->
@section('title', 'login')
<!-- вставляем контент -->
@section('content')
<div class="container" style="margin: 100px auto;">
<!-- выводим сообщение о том, что надо вначале зарегестрироваться -->
@if($flashMessage)
    <div class="alert alert-warning" role="alert">
        {{$flashMessage}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>    

@endif
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="tab" role="tabpanel">
            <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">sign in</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">sign up</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <!-- <form class="form-horizontal">
                            <div class="form-group">
                                <label for="exampleInputEmail1">username</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <div class="main-checkbox">
                                    <input value="None" id="checkbox1" name="check" type="checkbox">
                                    <label for="checkbox1"></label>
                                </div>
                                <span class="text">Keep me Signed in</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Sign in</button>
                            </div>
                            <div class="form-group forgot-pass">
                                <button type="submit" class="btn btn-default">forgot password</button>
                            </div>
                        </form> -->

                        <!-- Панель аутентификации -->
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="form-group">
                                <x-input-label class="" for="email" :value="__('Email')" />
                                <x-text-input  id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2 " />
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4 form-group">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4 form-group ">
                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-default" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif -->

                                <x-primary-button class="btn btn-default">
                                <a style="color: #d12cc1;">
                                    {{ __('Log in') }}
                                </a>
                                </x-primary-button>
                            </div>
                        </form>
    
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <!-- <form class="form-horizontal">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Sign up</button>
                            </div>
                        </form> -->

                        <!-- Панель регестрации с помощью контроллеров -->
                        <form method="POST" action="{{ route('register') }}" class="form-horizontal">
                            @csrf

                            <!-- Name -->
                            <div class="form-group">
                                <x-input-label  for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="form-group " />
                            </div>

                            <div class="form-group">
                                <x-input-label  for="lastname" :value="__('LastName')" />
                                <x-text-input id="lastname" class="block mt-1 w-full form-control" type="text" name="lastname" :value="old('lastname')" required autofocus />
                                <x-input-error :messages="$errors->get('lastname')" class="form-group " />
                            </div>
                            <div class="form-group">
                                <x-input-label  for="address" :value="__('Address')" />
                                <x-text-input id="address" class="block mt-1 w-full form-control" type="text" name="address" :value="old('address')" required autofocus />
                                <x-input-error :messages="$errors->get('address')" class="form-group " />
                            </div>
                            <div class="form-group">
                                <x-input-label  for="phone" :value="__('Phone')" />
                                <x-text-input id="phone" class="block mt-1 w-full form-control" type="text" name="phone" :value="old('phone')" required autofocus />
                                <x-input-error :messages="$errors->get('phone')" class="form-group " />
                            </div>

                            <!-- Email Address -->
                            <div class="form-group">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full form-control"
                                                type="password"
                                                name="password_confirmation" required />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4  form-group">
                                <a class="btn-default btn " href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-primary-button class=" btn-default btn">
                                    <a style="color: #d12cc1;">
                                    {{ __('Register') }}
                                    </a>
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-md-offset-3 col-md-6 -->
    </div><!-- /.row -->
</div><!-- /.container -->
@endsection