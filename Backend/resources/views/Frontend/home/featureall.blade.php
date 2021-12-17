@extends('Frontend.master.master')

@section('main-content')
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0"  data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">All Feature Apartment</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="/"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>All Feature Apartment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__product-slider-area ltn__product-gutter pt-20 pb-90">
    <div class="container">
       
        <div class="row ">
            <!-- ltn__product-item -->
            @forelse ($feature as $item)
            <div class="col-lg-4">
                <div class="ltn__product-item ltn__product-item-4 text-center--- mt-3">
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
                                <small>Estate Agents</small>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
          
        </div>
    </div>
</div>



@endsection