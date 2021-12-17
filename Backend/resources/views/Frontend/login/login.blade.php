@extends('Frontend.master.master')

@section('main-content')


<div class="ltn__utilize-overlay"></div>

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
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- LOGIN AREA START -->
<div class="ltn__login-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h5 class="section-title">Sign In To Your Account</h5>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="account-login-inner">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <form action="{{route('customer-login')}}" method="POST" class="ltn__form-box contact-form-box" method="POST">
                        @csrf

                        <div class="form-group mb-5">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email">
                            @error('email')
                            <spam class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <spam />
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password">
                            @error('password')
                            <spam class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                <spam />
                                @enderror
                        </div>

                        <div class="btn-wrapper mt-5">
                            <button class="theme-btn-1 btn btn-block" type="submit">SIGN IN</button>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center pt-50">
                    <h4>DON'T HAVE AN ACCOUNT?</h4>
                    <div class="btn-wrapper">
                        <h5><a href="/customer/register" class="theme-btn-1 btn black-btn">CREATE ACCOUNT</a></h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->

@endsection