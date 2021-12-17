@extends('Frontend.master.master')

@section('main-content')
<div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
   

    </div>
</div>


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
{{-- <div class="ltn__car-dealer-form-area mt--65 mt-120 pb-115---">
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
</div> --}}
<!-- CAR DEALER FORM AREA END -->

<!-- FEATURE AREA START ( Feature - 6) -->
<div class="ltn__feature-area section-bg-1--- pt-70 pb-50 mb-120---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h3 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Services</h3>
                </div>
            </div>
        </div>
        <div class="row ltn__custom-gutter---  justify-content-center mt-5">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                    <div class="ltn__feature-icon">
                        <!-- <span><i class="flaticon-house"></i></span> -->
                        <img src="{{url('frontend/img/icons/icon-img/21.png')}}" alt="#">
                    </div>
                    <div class="ltn__feature-info">
                        <h3><a href="{{route('sell.apartment')}}">Buy a Property</a></h3>
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
                        <h3><a href="{{route('rent.apartment')}}">Rent a Property</a></h3>
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
                        <h3><a href="{{route('seller.login')}}">Sell a Property</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->


<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pt-25 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h3 class="section-subtitle section-subtitle-2 ltn__secondary-color">Featured Listings</h3>

                </div>
            </div>
        </div>
        <div class="row mt-5">
            <!-- ltn__product-item -->
            @forelse ($feature as $item)
            <div class="col-lg-4">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img">
                        <a href="{{route('details.apartment',$item->id)}}"><img height="200px" width="370px" src="{{url('uploads/apartment_image/'.$item->image)}}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                @if($item->rent_sell=='1')
                                <li class="sale-badge bg-red">{{ $item->rent_sell == '1' ? 'Sell' : '' }}</li>
                                @else
                                <li class="sale-badge bg-green">{{ $item->rent_sell == '0' ? 'Rent' : '' }}</li>
                                @endif
                            </ul>
                        </div>
                     
                    </div>
                    <div class="product-info">
                        <div class="product-price">
                            @if($item->rent_sell=='1')
                            <span>{{$item->price}} BDT</span>
                            @else
                            <span>{{$item->price}} BDT<label>/Month</label></span>
                            @endif
                        </div>
                        <h2 class="product-title"><a href="{{route('details.apartment',$item->id)}}">{{$item->apartment_name}}</a></h2>
                        <div class="product-description">
                            <p>{!! Str::limit($item->text, 100) !!}</p>
                        </div>
                        <ul class="ltn__list-item-2 ltn__list-item-2-before">
                            <li><span>{{$item->bed}} <i class="flaticon-bed"></i></span>
                                Bedrooms
                            </li>
                            <li><span>{{$item->washroom}} <i class="flaticon-clean"></i></span>
                                Bathrooms
                            </li>
                            <li><span>{{$item->flat_size}} <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                square Ft
                            </li>
                        </ul>
                    </div>
                    <div class="product-info-bottom">
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                @if($item->seller->image)
                                <img src="{{url('/uploads/seller_image/'.$item->seller->image)}}" alt="#"></a>                                     
                                 @else
                                 <img src="{{url('frontend/img/blog/author.jpg')}}" alt="#">
                                 @endif
                            </div>
                            <div class="agent-brief">
                                <h6><a href="{{route('details.apartment',$item->id)}}">{{$item->seller->name}}</a></h6>
                                <small><i class="fa fa-phone"></i>{{$item->seller->phone}}</small>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
          
            <div class="search-by-place-btn">           
                <a href="{{route('featurer.apartment')}}" class="btn theme-btn-1 btn-effect-1 text-uppercase">View All <i class="flaticon-right-arrow"></i></a>

            </div>
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->



<!-- CATEGORY AREA START -->
<div class="ltn__category-area ltn__product-gutter section-bg-1--- pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h3 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Apartment</h3>

                </div>
            </div>
        </div>
        <div class="row ltn__category-slider-active--- slick-arrow-1 justify-content-center mt-5">
            @forelse ($apartment as $item)
            <div class="col-lg-4">
                <div class="ltn__product-item ltn__product-item-4 text-center---">
                    <div class="product-img">
                        <a href="{{route('details.apartment',$item->id)}}"><img height="200px" width="370px" src="{{url('uploads/apartment_image/'.$item->image)}}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                @if($item->rent_sell=='1')
                                <li class="sale-badge bg-red">{{ $item->rent_sell == '1' ? 'Sell' : '' }}</li>
                                @else
                                <li class="sale-badge bg-green">{{ $item->rent_sell == '0' ? 'Rent' : '' }}</li>
                                @endif
                            </ul>
                        </div>
                     
                    </div>
                    <div class="product-info">
                        <div class="product-price">
                            @if($item->rent_sell=='1')
                            <span>{{$item->price}} BDT</span>
                            @else
                            <span>{{$item->price}} BDT<label>/Month</label></span>
                            @endif
                        </div>
                        <h2 class="product-title"><a href="{{route('details.apartment',$item->id)}}">{{$item->apartment_name}}</a></h2>
                        <div class="product-description">
                            <p>{!! Str::limit($item->text, 100) !!}</p>
                        </div>
                        <ul class="ltn__list-item-2 ltn__list-item-2-before">
                            <li><span>{{$item->bed}} <i class="flaticon-bed"></i></span>
                                Bedrooms
                            </li>
                            <li><span>{{$item->washroom}} <i class="flaticon-clean"></i></span>
                                Bathrooms
                            </li>
                            <li><span>{{$item->flat_size}} <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                square Ft
                            </li>
                        </ul>
                    </div>
                    <div class="product-info-bottom">
                        <div class="real-estate-agent">
                            <div class="agent-img">
                                @if($item->seller->image)
                                <img src="{{url('/uploads/seller_image/'.$item->seller->image)}}" alt="#"></a>                                     
                                 @else
                                 <img src="{{url('frontend/img/blog/author.jpg')}}" alt="#">
                                 @endif
                            </div>
                            <div class="agent-brief">
                                <h6><a href="{{route('details.apartment',$item->id)}}">{{$item->seller->name}}</a></h6>
                                <small><i class="fa fa-phone"></i>{{$item->seller->phone}}</small>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
         
           
            @empty
                    
            @endforelse
           
            <div class="search-by-place-btn">
                <a href="{{route('all.apartment')}}" class="btn theme-btn-1 btn-effect-1 text-uppercase">View All <i class="flaticon-right-arrow"></i></a>
            </div>
           
          
        </div>
    </div>
</div>
<!-- CATEGORY AREA END -->




@endsection