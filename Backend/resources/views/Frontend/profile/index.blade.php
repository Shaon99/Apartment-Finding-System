@extends('Frontend.master.master')

@section('main-content')

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">My Account</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- WISHLIST AREA START -->
<div class="liton__wishlist-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- PRODUCT TAB AREA START -->
                <div class="ltn__product-tab-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="ltn__tab-menu-list mb-50">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_tab_1_1">Dashboard <i class="fas fa-home"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_tab_1_2">Orders <i class="fas fa-file-alt"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_tab_1_5">Account Details <i class="fas fa-user"></i></a>
                                        <a href="{{route("customer-logout")}}">Logout <i class="fas fa-sign-out-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="liton_tab_1_1">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <p>Hello <strong>{{ Auth::user()->name }} ( <small><a href="{{route('customer-logout')}}">Log out</a></small> )</p>
                                            <p>From your account dashboard you can view your <span>recent orders</span>, manage your <span>shipping and billing addresses</span>, and <span>edit your password and account details</span>.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="liton_tab_1_2">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Jun 22, 2019</td>
                                                            <td>Pending</td>
                                                            <td>$3000</td>
                                                            <td><a href="cart.html">View</a></td>
                                                        </tr>
                                                      
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                  
                       
                                    <div class="tab-pane fade" id="liton_tab_1_5">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <p>The following addresses will be used on the checkout page by default.</p>
                                            <div class="ltn__form-box">
                                     <form action="{{route('update.Customer')}}" method="POST">
                                                    @csrf
                                                    <div class="row mb-50">
                                                        <div class="col-md-6">
                                                            <label>Name:</label>
                                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name', Auth::user()->name)}}" >
                                                        
                                                        @error('name')
                                                        <spam class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            <spam />
                                                        @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Email:</label>
                                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email', Auth::user()->email)}}">
                                                                                        
                                                            @error('email')
                                                            <spam class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                                <spam />
                                                            @enderror
                                                          </div>
                                                        <div class="col-md-6">
                                                            <label>Phone</label>
                                                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone', Auth::user()->phone)}}">
                                                       
                                                    @error('phone')
                                                    <spam class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        <spam />
                                                    @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Address</label>
                                                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address', Auth::user()->address)}}">
                                                        
                                                    @error('address')
                                                    <spam class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        <spam />
                                                    @enderror
                                                        </div>
                                                    </div>
                                                    <fieldset>
                                                        <h4 class="title title-password ls-25 font-weight-bold">Password change</h4>
                                                        <div class="form-group">
                                                            <label class="text-dark" for="new-password">New Password leave blank to leave unchanged</label>
                                                            <input type="password" class="form-control form-control-md  @error('password') is-invalid @enderror"
                                                                id="password" name="password" placeholder="Minimum 6 characters">
                                                                @error('password')
                                                                <spam class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                    <spam />
                                                                @enderror
                                                       
                                                            </div>
                                                        <strong><span id="edit_password_error" class="invalid-feedback d-block mb-3" role="alert">
                                                        </span> </strong>
                                                        <div class="form-group mb-6">
                                                            <label class="text-dark" for="confirm-password">Confirm Password</label>
                                                            <input type="password" class="form-control form-control-md"
                                                                id="confirm-password" name="password_confirmation">
                                                        </div>
                                                    </fieldset>
                                                    <div class="btn-wrapper">
                                                        <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT TAB AREA END -->
            </div>
        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->

@endsection