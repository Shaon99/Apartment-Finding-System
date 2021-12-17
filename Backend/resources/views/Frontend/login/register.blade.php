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
                    <h1 class="section-title">Register Your Account</h1>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <form class="ltn__form-box contact-form-box" action="{{route('store.customer')}}" method="POST" >
                      @csrf

                      
                      <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" placeholder="Enter your Name">

                        @error('name')
                            <spam class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <spam />
                            @enderror

                    </div>
                        
                    <div class="form-group">
                        <label for="exampleInputUsername1">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" placeholder="Enter your Email">

                        @error('email')
                            <spam class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <spam />
                            @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Phone</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" value="{{ old('phone') }}" placeholder="Enter your Phone">

                        @error('phone')
                            <spam class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <spam />
                            @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                            name="address" value="{{ old('address') }}" placeholder="Enter your Address">

                        @error('address')
                            <spam class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <spam />
                            @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" placeholder="Enter your Password">

                        @error('password')
                            <spam class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <spam />
                            @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Confirm Password</label>
                        <input type="password" class="form-control"
                            name="password_confirmation" placeholder="Confirm Password*">

                       
                    </div>
                       
                      
                        <div class="btn-wrapper">
                            <button class="theme-btn-1 btn reverse-color btn-block" type="submit">CREATE ACCOUNT</button>
                        </div>
                    </form>
                    <div class="by-agree text-center">                       
                        <div class="go-to-btn mt-25">
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