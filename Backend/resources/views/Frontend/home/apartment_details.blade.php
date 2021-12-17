@extends('Frontend.master.master')

@section('main-content')
 <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0"  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Apartment Details</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Apartment Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BREADCRUMB AREA END -->

    <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <div class="ltn__img-slider-area mb-90">
        <div class="container-fluid">
            <div class="row  ">
        <img src="{{url('uploads/apartment_image/'.$apartment->image)}}" height="500px;" alt="Image">
                       
               
            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                        <div class="ltn__blog-meta">
                            <ul>
                               
                                <li class="ltn__blog-category">
                                    @if($apartment->rent_sell=='1')
                                    <a class="bg-orange" href="#">{{ $apartment->rent_sell == '1' ? 'For Sell' : '' }}</a>
                                    @else
                                    <a class="bg-orange" href="#">{{ $apartment->rent_sell == '0' ? 'For Rent' : '' }}</a>
                                    @endif
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i>{{$apartment->created_at->format('d M  Y')}}
                                </li>
                             
                            </ul>
                        </div>
                        <h1>{{$apartment->apartment_name}}</h1>
                        <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span> {{$apartment->city}}</label>
                        <h4 class="title-2">Description</h4>
                        <p>{{$apartment->text}}</p>

                        <h4 class="title-2">Property Detail</h4>  
                        <div class="property-detail-info-list section-bg-1 clearfix mb-60">                          
                            <ul>
                                <li><label>Property ID:</label> <span>{{$apartment->id}}</span></li>
                                <li><label>Home Area: </label> <span>{{$apartment->flat_size}}</span></li>
                                <li><label>Bed:</label> <span>{{$apartment->bed}}</span></li>
                                <li><label>Washroom:</label> <span>{{$apartment->washroom}}</span></li>
                                <li><label>Drawing:</label> <span>{{$apartment->drawing}}</span></li>
                            </ul>
                            <ul>
                                <li><label>Dining:</label> <span>{{$apartment->dining}} </span></li>
                                <li><label>Kitchen:</label> <span>{{$apartment->kitchen}}</span></li>
                                <li><label>Price:</label> <span>{{$apartment->price}}</span></li>
                                <li><label>Property Status:</label> <span>
                                    @if($apartment->rent_sell=='1')
                                    {{ $apartment->rent_sell == '1' ? 'For Sell' : '' }}
                                    @else
                                    {{ $apartment->rent_sell == '0' ? 'For Rent' : '' }}
                                    @endif
                                </span>
                            </li>
                            </ul>
                        </div>
                                        
                  

                        <h4 class="title-2">From Our Gallery</h4>
                        <div class="ltn__property-details-gallery mb-30">
                            <div class="row">
                               @forelse ($gallery as $item)
                               <div class="col-md-6">
                                    <img class="mb-30" src="{{url('uploads/galleries/'.$item->image_file)}}" alt="Image">
                            </div>
                               @empty
                                   
                               @endforelse
                               
                            </div>
                        </div>

                      
                        
                        <div class="ltn__shop-details-tab-content-inner--- ltn__shop-details-tab-inner-2 ltn__product-details-review-inner mb-60">
                            <h4 class="title-2">Customer Reviews</h4>
                           
                            <hr>
                            <!-- comment-area -->
                            <div class="ltn__comment-area mb-30">
                                <div class="ltn__comment-inner">
                                    <ul>
                                        @forelse ($Review as $item)
                                        <li>
                                            <div class="ltn__comment-item clearfix">
                                                <div class="ltn__commenter-comment">
                                                    <h6><a href="#">{{$item->name}}</a></h6>                                                  
                                                    <p>{{$item->comment}}</p>
                                                    <span class="ltn__comment-reply-btn">{{$item->created_at->format('d M  Y H:i A')}}</span>
                                                </div> 
                                            </div>
                                        </li>
                                       
                                        @empty
                                        <p>Not Found</p>
                                    @endforelse
                                    </ul>
                                </div>
                            </div>
                            <!-- comment-reply -->
                            <div class="ltn__comment-reply-area ltn__form-box mb-30">
                                <form action="{{route('review')}}" method="post">
                                    @csrf
                                    <h4>Add a Review</h4>
                                   
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <textarea required name="comment" placeholder="Type your comments...."></textarea>
                                    </div>
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input required name="name" type="text" placeholder="Type your name....">
                                    </div>
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input required name="email" type="email" placeholder="Type your email....">
                                    </div>

                                    <input type="text" name="product_id" value="{{$apartment->id}}" hidden>
                                  
                                    <div class="btn-wrapper">
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                        <!-- Author Widget -->
                        <div class="widget ltn__author-widget">
                            <div class="ltn__author-widget-inner text-center">
                                @if($apartment->seller->image)
                                <img src="{{url('uploads/seller_image/'.$apartment->seller->image)}}" alt="Image">
                                @else
                                <img src="{{url('frontend/img/team/4.jpg')}}" alt="Image">
                                @endif
                                <h5>{{$apartment->seller->name}}</h5>
                                <small>Contact</small>
                            
                                
                                <div class="ltn__social-media">
                                    <ul>
                                       
                                        <li><i class="fa fa-phone"></i> <strong>{{$apartment->contact}}</strong></li>
                                        <li><i class="fa fa-envelope-square"></i> <strong>{{$apartment->seller->email}}</strong></li>

                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                        <div class="widget ltn__social-media-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Follow us</h4>
                            <div class="ltn__social-media-2">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                      
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
  
    <!-- PRODUCT SLIDER AREA END -->

@endsection