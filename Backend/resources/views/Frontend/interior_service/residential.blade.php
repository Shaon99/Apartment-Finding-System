@extends('Frontend.master.master')

@section('main-content')

 <!-- SLIDER AREA START (slider-11) -->
 <div class="ltn__slider-area ltn__slider-11  ltn__slider-11-slide-item-count-show--- ltn__slider-11-pagination-count-show--- section-bg-1">
   
    <div class="ltn__slider-11-inner">
        <div class="ltn__slider-11-active">
            <!-- slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3 ltn__slide-item-11">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Real Estate Agency</h6>
                                        <h1 class="slide-title animated ">Search and Find <br><span>Luxury</span> House</h1>
                                        <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                     
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="{{url('frontend/img/slider/62.jpg')}}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- SEARCH BY PLACE AREA START (testimonial-7) -->


        <div class="row" style="background:white; padding: 100px 00px 100px 00px;text-align: center;" >
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                   
                    <h1 class="section-title">GALLERY</h1>
                </div>
            </div>
        </div>

        <div class="ltn__img-slider-area mb-90"  style="background:white; padding: 00px 00px 100px 00px;">
            <div class="container-fluid">
                <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
                    <div class="col-lg-12">
                        <div class="ltn__img-slide-item-4">
                            <a href="img/img-slide/31.jpg" data-rel="lightcase:myCollection">
                                <img src="{{url('frontend/img/img-slide/31.jpg')}}" alt="Image" >
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__img-slide-item-4">
                            <a href="#" data-rel="lightcase:myCollection">
                                <img src="{{url('frontend/img/img-slide/31.jpg')}}" alt="Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__img-slide-item-4">
                            <a href="#" data-rel="lightcase:myCollection">
                                <img src="{{url('frontend/img/img-slide/31.jpg')}}" alt="Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__img-slide-item-4">
                            <a href="#" data-rel="lightcase:myCollection">
                                <img src="{{url('frontend/img/img-slide/31.jpg')}}" alt="Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__img-slide-item-4">
                            <a href="#" data-rel="lightcase:myCollection">
                                <img src="{{url('frontend/img/img-slide/31.jpg')}}" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- IMAGE SLIDER AREA END -->
    
    <div class="ltn__form-box contact-form-box box-shadow white-bg mt-50 " style="background: #F2F6F7 ;" >
        <h4 class=" text-center " style="font-size: 33px;  padding: 30px 00px 30px 00px;">Send us a message and we will contact you back</h4>
        <center>
        <div class="col-md-8 ">
            
            <form id="contact-form" action="{{route('interioradd')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-item input-item-name ltn__custom-icon">
                            <input  required type="text" name="name" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-item input-item-email ltn__custom-icon">
                            <input  required type="email" name="email" placeholder="Enter email address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-item">
                            <select required  class="nice-select" name="service">
                                <option value="Select Service Type">Select Service Type</option>
                                <option value="Property Management">Property Management </option>
                                <option value="Mortgage Service">Mortgage Service </option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-item input-item-phone ltn__custom-icon">
                            <input required  type="text" name="phone" placeholder="Enter phone number">
                        </div>
                    </div>
                </div>
                <div class="input-item input-item-textarea ltn__custom-icon">
                    <textarea required  name="message" placeholder="Enter message"></textarea>
                </div>
                <div class="btn-wrapper mt-0">
                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">get service</button>
                </div>
                <p class="form-messege mb-0 mt-20"></p>
            </form>
        </div>
         
        <div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="call-to-action-inner call-to-action-inner-4 text-center">
                            <div class="section-title-area ltn__section-title-2">
                                
                                <h1 class="section-title white-color" style="color: black">897-876-987-90</h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="tel:+123456789" class="theme-btn-1 btn btn-effect-1">MAKE A CALL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </center>
     
    </div>


      


@endsection