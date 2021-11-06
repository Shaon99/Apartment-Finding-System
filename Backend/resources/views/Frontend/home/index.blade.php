@extends('Frontend.master.master')

@section('main-content')
<!-- Utilize Cart Menu Start -->
<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{url('fronetnd/img/product/1.png')}}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Wheel Bearing Retainer</a></h6>
                    <span class="mini-cart-quantity">1 x $65.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{url('fronetnd/img/product/2.png')}}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">3 Rooms Manhattan</a></h6>
                    <span class="mini-cart-quantity">1 x $85.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{url('fronetnd/img/product/3.png')}}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">OE Replica Wheels</a></h6>
                    <span class="mini-cart-quantity">1 x $92.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{url('fronetnd/img/product/4.png')}}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Shock Mount Insulator</a></h6>
                    <span class="mini-cart-quantity">1 x $68.00</span>
                </div>
            </div>
        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span>$310.00</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
            </div>
            <p>Free Shipping on All Orders Over $100!</p>
        </div>

    </div>
</div>
<!-- Utilize Cart Menu End -->

<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="index.html"><img src="{{url('fronetnd/img/logo.png')}}" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="#">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home Style 01</a></li>
                        <li><a href="index-2.html">Home Style 02</a></li>
                        <li><a href="index-3.html">Home Style 03</a></li>
                        <li><a href="index-4.html">Home Style 04</a></li>
                        <li><a href="index-5.html">Home Style 05  <span class="menu-item-badge">video</span></a></li>
                        <li><a href="index-6.html">Home Style 06</a></li>
                        <li><a href="index-7.html">Home Style 07</a></li>
                        <li><a href="index-8.html">Home Style 08</a></li>
                        <li><a href="index-9.html">Home Style 09</a></li>
                        <li><a href="index-10.html">Home Style 10 <span class="menu-item-badge">Map</span></a></li>
                        <li><a href="index-11.html">Home Style 11</a></li>
                    </ul>
                </li>
                <li><a href="#">About</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="locations.html">Google Map Locations</a></li>
                    </ul>
                </li>
                <li><a href="#">Shop</a>
                    <ul class="sub-menu">
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop-grid.html">Shop Grid</a></li>
                        <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                        <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                        <li><a href="product-details.html">Shop details </a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="order-tracking.html">Order Tracking</a></li>
                        <li><a href="account.html">My Account</a></li>
                        <li><a href="login.html">Sign in</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </li>
                <li><a href="#">News</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">News</a></li>
                        <li><a href="blog-grid.html">News Grid</a></li>
                        <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                        <li><a href="blog-details.html">News details</a></li>
                    </ul>
                </li>
                <li><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About</a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="history.html">History</a></li>
                        <li><a href="add-listing.html">Add Listing</a></li>
                        <li><a href="locations.html">Google Map Locations</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="account.html" title="My Account">
                        <span class="utilize-btn-icon">
                            <i class="far fa-user"></i>
                        </span>
                        My Account
                    </a>
                </li>
                <li>
                    <a href="wishlist.html" title="Wishlist">
                        <span class="utilize-btn-icon">
                            <i class="far fa-heart"></i>
                            <sup>3</sup>
                        </span>
                        Wishlist
                    </a>
                </li>
                <li>
                    <a href="cart.html" title="Shoping Cart">
                        <span class="utilize-btn-icon">
                            <i class="fas fa-shopping-cart"></i>
                            <sup>5</sup>
                        </span>
                        Shoping Cart
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>

<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3  section-bg-2">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="{{url('frontend/img/slider/11.jpg')}}">
            <div class="ltn__slide-item-inner text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-video mb-50 d-none">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Real Estate Agency</h6>
                                    <h1 class="slide-title animated ">Find Your Dream <br> House By Us</h1>
                                    <div class="slide-brief animated">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="shop.html" class="theme-btn-1 btn btn-effect-1">Make An Enquiry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="{{url('frontend/img/slider/12.jpg')}}">
            <div class="ltn__slide-item-inner  text-right text-end">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Real Estate Agency</h6>
                                    <h1 class="slide-title animated ">Find Your Dream <br> House By Us</h1>
                                    <div class="slide-brief animated">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="shop.html" class="theme-btn-1 btn btn-effect-1">Make An Enquiry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2  ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60" data-bs-bg="{{url('frontend/img/slider/12.jpg')}}">
            <div class="ltn__slide-item-inner  text-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Real Estate Agency</h6>
                                    <h1 class="slide-title animated ">Find Your Dream <br> House By Us</h1>
                                    <div class="slide-brief animated">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="shop.html" class="theme-btn-1 btn btn-effect-1">Make An Enquiry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- CAR DEALER FORM AREA START -->
<div class="ltn__car-dealer-form-area mt--65 mt-120 pb-115---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__car-dealer-form-tab">
                    <div class="ltn__tab-menu  text-uppercase d-none">
                        <div class="nav">
                            <a class="active show" data-bs-toggle="tab" href="#ltn__form_tab_1_1"><i class="fas fa-car"></i>Find A Car</a>
                            <a data-bs-toggle="tab" href="#ltn__form_tab_1_2" class=""><i class="far fa-user"></i>Get a Dealer</a>
                        </div>
                    </div>
                    <div class="tab-content bg-white box-shadow-1 position-relative pb-10">
                        <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                            <div class="car-dealer-form-inner">
                                <form action="#" class="ltn__car-dealer-form-box row">
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-car---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Choose Area</option>
                                            <option>chicago</option>
                                            <option>London</option>
                                            <option>Los Angeles</option>
                                            <option>New York</option>
                                            <option>New Jersey</option>
                                        </select>
                                    </div> 
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Property Status</option>
                                            <option>Open house</option>
                                            <option>Rent</option>
                                            <option>Sale</option>
                                            <option>Sold</option>
                                        </select>
                                    </div> 
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-calendar---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Property Type</option>
                                            <option>Apartment</option>
                                            <option>Co-op</option>
                                            <option>Condo</option>
                                            <option>Single Family Home</option>
                                        </select>
                                    </div>
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                        <div class="btn-wrapper text-center mt-0">
                                            <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button> -->
                                            <a href="shop-right-sidebar.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Find Now</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ltn__form_tab_1_2">
                            <div class="car-dealer-form-inner">
                                <form action="#" class="ltn__car-dealer-form-box row">
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-car---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Choose Area</option>
                                            <option>chicago</option>
                                            <option>London</option>
                                            <option>Los Angeles</option>
                                            <option>New York</option>
                                            <option>New Jersey</option>
                                        </select>
                                    </div> 
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Property Status</option>
                                            <option>Open house</option>
                                            <option>Rent</option>
                                            <option>Sale</option>
                                            <option>Sold</option>
                                        </select>
                                    </div> 
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-calendar---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Property Type</option>
                                            <option>Apartment</option>
                                            <option>Co-op</option>
                                            <option>Condo</option>
                                            <option>Single Family Home</option>
                                        </select>
                                    </div>
                                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                        <div class="btn-wrapper text-center mt-0">
                                            <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button> -->
                                            <a href="shop-right-sidebar.html" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Properties</a>
                                        </div>
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
<!-- CAR DEALER FORM AREA END -->

<!-- FEATURE AREA START ( Feature - 6) -->
<div class="ltn__feature-area section-bg-1--- pt-115 pb-90 mb-120---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h6>
                    <h1 class="section-title">Our Main Focus</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__custom-gutter---  justify-content-center">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house"></i></span> -->
                        <img src="{{url('frontend/img/icons/icon-img/21.png')}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Buy a home</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house-3"></i></span> -->
                        <img src="{{url('frontend/img/icons/icon-img/22.png')}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Rent a home</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-deal-1"></i></span> -->
                        <img src="{{url('frontend/img/icons/icon-img/23.png')}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="service-details.html">Sell a home</a></h3>
                        <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>
                        <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

<!-- SEARCH BY PLACE AREA START (testimonial-7) -->
<div class="ltn__search-by-place-area section-bg-1 before-bg-top--- bg-image-top--- pt-115 pb-70" data-bs-bg="img/bg/20.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Area Properties</h6>
                    <h1 class="section-title">Properties By Location</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__search-by-place-slider-1-active slick-arrow-1">
            <div class="col-lg-4">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html"><img src="{{url('frontend/img/product-3/1.jpg')}}" alt="#"></a>
                        <div class="search-by-place-badge">
                            <ul>
                                <li>2 Properties</li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-by-place-info">
                        <h6><a href="locations.html">San Francisco</a></h6>
                        <h4><a href="product-details.html">Mission District Area</a></h4>
                        <div class="search-by-place-btn">
                            <a href="product-details.html">View Property <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html"><img src="{{url('frontend/img/product-3/2.jpg')}}" alt="#"></a>
                        <div class="search-by-place-badge">
                            <ul>
                                <li>5 Properties</li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-by-place-info">
                        <h6><a href="locations.html">New York</a></h6>
                        <h4><a href="product-details.html">Pacific Heights Area</a></h4>
                        <div class="search-by-place-btn">
                            <a href="product-details.html">View Property <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html"><img src="{{url('frontend/img/product-3/3.jpg')}}" alt="#"></a>
                        <div class="search-by-place-badge">
                            <ul>
                                <li>9 Properties</li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-by-place-info">
                        <h6><a href="locations.html">Sedona, Arizona</a></h6>
                        <h4><a href="product-details.html">Noe Valley Zones</a></h4>
                        <div class="search-by-place-btn">
                            <a href="product-details.html">View Property <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__search-by-place-item">
                    <div class="search-by-place-img">
                        <a href="product-details.html"><img src="{{url('frontend/img/product-3/2.jpg')}}" alt="#"></a>
                        <div class="search-by-place-badge">
                            <ul>
                                <li>5 Properties</li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-by-place-info">
                        <h6><a href="locations.html">New York</a></h6>
                        <h4><a href="product-details.html">Pacific Heights Area</a></h4>
                        <div class="search-by-place-btn">
                            <a href="product-details.html">View Property <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- SEARCH BY PLACE AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Properties</h6>
                    <h1 class="section-title">Featured Listings</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-three-active slick-arrow-1">
            <!-- ltn__product-item -->
            <div class="col-lg-12">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{url('frontend/img/product-3/1.jpg')}}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge bg-green">For Rent</li>
                            </ul>
                        </div>
                        <div class="product-img-location-gallery">
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-img-gallery">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="fas fa-camera"></i> 4</a>
                                    </li>
                                    <li>
                                        <a href="product-details.html"><i class="fas fa-film"></i> 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-price">
                            <span>$34,900<label>/Month</label></span>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                        <div class="product-description">
                            <p>Beautiful Huge 1 Family House In Heart Of <br>
                                Westbury. Newly Renovated With New Wood</p>
                        </div>
                        <ul class="ltn__list-item-2 ltn__list-item-2-before">
                            <li><span>3 <i class="flaticon-bed"></i></span>
                                Bedrooms
                            </li>
                            <li><span>2 <i class="flaticon-clean"></i></span>
                                Bathrooms
                            </li>
                            <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                square Ft
                            </li>
                        </ul>
                    </div>
                    <div class="product-info-bottom">
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{url('frontend/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
                            <div class="agent-brief">
                                <h6><a href="team-details.html">William Seklo</a></h6>
                                <small>Estate Agents</small>
                            </div>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="flaticon-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="flaticon-heart-1"></i></a>
                                </li>
                                <li>
                                    <a href="product-details.html" title="Product Details">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-lg-12">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{url('frontend/img/product-3/2.jpg')}}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge bg-green---">For Sale</li>
                            </ul>
                        </div>
                        <div class="product-img-location-gallery">
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-img-gallery">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="fas fa-camera"></i> 4</a>
                                    </li>
                                    <li>
                                        <a href="product-details.html"><i class="fas fa-film"></i> 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-price">
                            <span>$34,900<label>/Month</label></span>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">Modern Apartments</a></h2>
                        <div class="product-description">
                            <p>Beautiful Huge 1 Family House In Heart Of <br>
                                Westbury. Newly Renovated With New Wood</p>
                        </div>
                        <ul class="ltn__list-item-2 ltn__list-item-2-before">
                            <li><span>3 <i class="flaticon-bed"></i></span>
                                Bedrooms
                            </li>
                            <li><span>2 <i class="flaticon-clean"></i></span>
                                Bathrooms
                            </li>
                            <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                square Ft
                            </li>
                        </ul>
                    </div>
                    <div class="product-info-bottom">
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{url('frontend/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
                            <div class="agent-brief">
                                <h6><a href="team-details.html">William Seklo</a></h6>
                                <small>Estate Agents</small>
                            </div>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="flaticon-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="flaticon-heart-1"></i></a>
                                </li>
                                <li>
                                    <a href="product-details.html" title="Product Details">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-lg-12">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{url('frontend/img/product-3/4.jpg')}}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge bg-green">For Rent</li>
                            </ul>
                        </div>
                        <div class="product-img-location-gallery">
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-img-gallery">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="fas fa-camera"></i> 4</a>
                                    </li>
                                    <li>
                                        <a href="product-details.html"><i class="fas fa-film"></i> 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-price">
                            <span>$34,900<label>/Month</label></span>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">Comfortable Apartment</a></h2>
                        <div class="product-description">
                            <p>Beautiful Huge 1 Family House In Heart Of <br>
                                Westbury. Newly Renovated With New Wood</p>
                        </div>
                        <ul class="ltn__list-item-2 ltn__list-item-2-before">
                            <li><span>3 <i class="flaticon-bed"></i></span>
                                Bedrooms
                            </li>
                            <li><span>2 <i class="flaticon-clean"></i></span>
                                Bathrooms
                            </li>
                            <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                square Ft
                            </li>
                        </ul>
                    </div>
                    <div class="product-info-bottom">
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{url('frontend/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
                            <div class="agent-brief">
                                <h6><a href="team-details.html">William Seklo</a></h6>
                                <small>Estate Agents</small>
                            </div>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="flaticon-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="flaticon-heart-1"></i></a>
                                </li>
                                <li>
                                    <a href="product-details.html" title="Product Details">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-lg-12">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{url('frontend/img/product-3/4.jpg')}}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge bg-green">For Rent</li>
                            </ul>
                        </div>
                        <div class="product-img-location-gallery">
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-img-gallery">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="fas fa-camera"></i> 4</a>
                                    </li>
                                    <li>
                                        <a href="product-details.html"><i class="fas fa-film"></i> 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-price">
                            <span>$34,900<label>/Month</label></span>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">Luxury villa in Rego Park </a></h2>
                        <div class="product-description">
                            <p>Beautiful Huge 1 Family House In Heart Of <br>
                                Westbury. Newly Renovated With New Wood</p>
                        </div>
                        <ul class="ltn__list-item-2 ltn__list-item-2-before">
                            <li><span>3 <i class="flaticon-bed"></i></span>
                                Bedrooms
                            </li>
                            <li><span>2 <i class="flaticon-clean"></i></span>
                                Bathrooms
                            </li>
                            <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                square Ft
                            </li>
                        </ul>
                    </div>
                    <div class="product-info-bottom">
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{url('frontend/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
                            <div class="agent-brief">
                                <h6><a href="team-details.html">William Seklo</a></h6>
                                <small>Estate Agents</small>
                            </div>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="flaticon-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="flaticon-heart-1"></i></a>
                                </li>
                                <li>
                                    <a href="product-details.html" title="Product Details">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-lg-12">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{url('frontend/img/blog/author.jpg')}}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge bg-green">For Rent</li>
                            </ul>
                        </div>
                        <div class="product-img-location-gallery">
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="locations.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-img-gallery">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="fas fa-camera"></i> 4</a>
                                    </li>
                                    <li>
                                        <a href="product-details.html"><i class="fas fa-film"></i> 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-price">
                            <span>$34,900<label>/Month</label></span>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">Beautiful Flat in Manhattan </a></h2>
                        <div class="product-description">
                            <p>Beautiful Huge 1 Family House In Heart Of <br>
                                Westbury. Newly Renovated With New Wood</p>
                        </div>
                        <ul class="ltn__list-item-2 ltn__list-item-2-before">
                            <li><span>3 <i class="flaticon-bed"></i></span>
                                Bedrooms
                            </li>
                            <li><span>2 <i class="flaticon-clean"></i></span>
                                Bathrooms
                            </li>
                            <li><span>3450 <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                square Ft
                            </li>
                        </ul>
                    </div>
                    <div class="product-info-bottom">
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                <a href="team-details.html"><img src="{{url('frontend/img/blog/author.jpg')}}" alt="#"></a>
                            </div>
                            <div class="agent-brief">
                                <h6><a href="team-details.html">William Seklo</a></h6>
                                <small>Estate Agents</small>
                            </div>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="flaticon-expand"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                        <i class="flaticon-heart-1"></i></a>
                                </li>
                                <li>
                                    <a href="product-details.html" title="Product Details">
                                        <i class="flaticon-add"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->



<!-- TESTIMONIAL AREA START (testimonial-7) -->
<div class="ltn__testimonial-area section-bg-1--- bg-image-top pt-115 pb-70" data-bs-bg="{{url('frontend/img/bg/20.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Testimonial</h6>
                    <h1 class="section-title">Clients Feedback</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__testimonial-slider-5-active slick-arrow-1">
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i> 
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{url('frontend/img/testimonial/1.jpg')}}" alt="#">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Jacob William</h5>
                                <label>Selling Agents</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i> 
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{url('frontend/img/testimonial/1.jpg')}}" alt="#">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Kelian Anderson</h5>
                                <label>Selling Agents</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i> 
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{url('frontend/img/testimonial/1.jpg')}}" alt="#">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Adam Joseph</h5>
                                <label>Selling Agents</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i> 
                            Precious ipsum dolor sit amet
                            consectetur adipisicing elit, sed dos
                            mod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious ips
                            um dolor sit amet, consecte</p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{url('frontend/img/testimonial/1.jpg')}}" alt="#">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>James Carter</h5>
                                <label>Selling Agents</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->


<!-- BRAND LOGO AREA START -->
<div class="ltn__brand-logo-area ltn__brand-logo-1 section-bg-1 pt-110 pb-110 plr--9 d-none---">
    <div class="container-fluid">
        <div class="row ltn__brand-logo-active">
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{url('frontend/img/brand-logo/3.png')}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{url('frontend/img/brand-logo/3.png')}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{url('frontend/img/brand-logo/3.png')}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{url('frontend/img/brand-logo/3.png')}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{url('frontend/img/brand-logo/3.png')}}" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__brand-logo-item">
                    <img src="{{url('frontend/img/brand-logo/3.png')}}" alt="Brand Logo">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BRAND LOGO AREA END -->

<!-- BLOG AREA START (blog-3) -->
<div class="ltn__blog-area pt-120 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">News & Blogs</h6>
                    <h1 class="section-title">Leatest News Feeds</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{url('frontend/img/blog/5.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Decorate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">10 Brilliant Ways To Decorate Your Home</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{url('frontend/img/blog/5.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Interior</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">The Most Inspiring Interior Design Of 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{url('frontend/img/blog/5.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Estate</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Recent Commercial Real Estate Transactions</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{url('frontend/img/blog/5.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Room</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Renovating a Living Room? Experts Share Their Secrets</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{url('frontend/img/blog/5.jpg')}}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Trends</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">7 home trends that will shape your house in 2021</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- BLOG AREA END -->


@endsection