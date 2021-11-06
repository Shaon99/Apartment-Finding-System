@extends('Frontend.master.master')

@section('main-content')
<div class="ltn__service-area section-bg-1 pt-115 pb-70">
        <div class="container">
        
            <div class="row  justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <span><i class="flaticon-house"></i></span>
                            <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="{{route('residential.interior')}}">Residential</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <span><i class="flaticon-mortgage"></i></span>
                            <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                        </div>
                        <div class="ltn__feature-info">
                            <h3><a href="{{route('commercial.interior')}}">Commercial</a></h3>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- SERVICE AREA END -->
@endsection