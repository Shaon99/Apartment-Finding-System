@extends('Frontend.master.master')

@section('main-content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Account</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- LOGIN AREA START (Register) -->
<div class="ltn__login-area pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Register <br>Your Account</h1>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <form class="ltn__form-box contact-form-box" action="{{route('store.customer')}}" method="POST" >
                      @csrf

                      
                        <input type="text" value="{{ old('name') }}" name="name" class="@error('name') is-invalid @enderror" placeholder="Name">
                        @error('name')
                        <spam class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            <spam />
                        @enderror
                        
                        <input type="text" value="{{ old('email') }}" name="email"class="@error('email') is-invalid @enderror" placeholder="Email*">
                        @error('email')
                        <spam class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            <spam />
                        @enderror

                        <input type="text" name="phone" value="{{ old('phone') }}" class="@error('phone') is-invalid @enderror"placeholder="Phone*">
                         @error('phone')
                            <spam class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <spam />
                            @enderror
                        <input type="text" value="{{ old('address') }}" name="address"class="@error('address') is-invalid @enderror" placeholder="Address*">                      
                         @error('address')
                            <spam class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <spam />
                            @enderror
                        <input type="password" name="password"class="@error('password') is-invalid @enderror" placeholder="Password*">
                         @error('password')
                            <spam class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <spam />
                            @enderror
                        <input type="password" name="password_confirmation" placeholder="Confirm Password*">
                       
                      
                        <div class="btn-wrapper">
                            <button class="theme-btn-1 btn reverse-color btn-block" type="submit">CREATE ACCOUNT</button>
                        </div>
                    </form>
                    <div class="by-agree text-center">                       
                        <div class="go-to-btn mt-50">
                            <h5><a href="{{route('customer.login')}}">ALREADY HAVE AN ACCOUNT ?</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->

@endsection