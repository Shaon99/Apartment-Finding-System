@extends('seller.master.master')

@section('main_content')
    <!-- partial -->
         


            <div class="container-fluid">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <a class="btn btn-success btn-rounded" href="{{ route('seller.apartmentView') }}"><i class="fa fa-eye">
                                </i>&nbsp All Apartment</a>
        
                        </h3>
                      
                    </div>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="container rounded bg-white mb-3">
        
                                    <div class="row">
                                   
                                            <div class="col-md-12 border-right">
        
        
        
                                                <div class="row ">
        
        
                                                    <div class="col-md-6"><label class="labels text-capitalize">Feature
                                                            Picture</label><br>
                                                        <img id="" class="mt-1" width="210px"
                                                            src="{{ url('uploads/apartment_image/' . $apartment->image) }}" />
                                                    </div>
        
                                                    <div class="col-md-6"><label class="labels text-capitalize">Gallery
                                                            Picture</label><br>
                                                        @foreach ($gallery as $data)
        
                                                            <img class="mt-1" width="210px"
                                                                src="{{ url('uploads/galleries/' . $data->image_file) }}" />
        
                                                        @endforeach
        
        
                                                    </div>       
        
        
                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">Apartment Name</label>
                                                       
                                                    </div>
        
                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->apartment_name }}
                                                          </h5>
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">Apartment Address</label>                                                      
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->address }}
                                                          </h5>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">Contact</label>                                                      
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->contact }}
                                                          </h5>
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">Apartment size</label>                                                      
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->flat_size }}
                                                        </h5>
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">City</label>                                                      
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->city }}
                                                        </h5>
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">rent/price</label>                                                      
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->price }}
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">Bed</label>                                                      
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->bed }}
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">drawing</label>                                                      
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->drawing }}
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">dining</label>                                                      
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->dining }}
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">kitchen</label>                                                      
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->kitchen }}
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">washroom</label>                                                      
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->washroom }}
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">rent/sell</label>                                                      
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->rent_sell }}
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <label class="text-capitalize ">Description</label>                                                      
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <h5  class="text-capitalize">
                                                            {{ $apartment->text }}
                                                        </h5>
                                                    </div>
                                                    
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
            

        </div>
    </div>
    



            @endsection