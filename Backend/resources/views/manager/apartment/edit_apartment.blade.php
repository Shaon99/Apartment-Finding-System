@extends('manager.master.master')

@section('main_content')
    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="container rounded bg-white mb-3">

                            <div class="row">
                                <form action="{{ route('manager.updateApartment',$apartment->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12 border-right">

                                        <div class="row ">

                                            <div class="col-md-6 mb-2"><label class="labels text-capitalize">Feature
                                                    Picture</label><br>

                                                <img id="file-id-preview" class="mt-5" width="150px" src="" />
                                                <input id="uploadFile" type="file" onchange="showPreview(event);" name="image"
                                                    class="btn btn-primary btn-sm profile-button  mt-2 text-uppercase" />
                                                @error('image')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>



                                            <div class="col-md-6 mb-2"><label class="labels text-capitalize">Multiple
                                                    Picture</label><br>
                                                <img id="multiple_image_preview" class="mt-5" width="150px" src="" />
                                                <input type="file" name="image_file[]"
                                                    class="btn btn-primary btn-sm profile-button  mt-2 text-uppercase"
                                                    multiple />
                                                    @error('image_file[]')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror

                                            </div>

                                            <div class="col-md-6"><label class="labels text-capitalize">Old Feature
                                                    Picture</label><br>
                                                <img id="" class="mt-1" width="100px"
                                                    src="{{ url('uploads/apartment_image/' . $apartment->image) }}" />
                                            </div>

                                            <div class="col-md-6"><label class="labels text-capitalize">Old Multiple
                                                    Picture</label><br>
                                                @foreach ($gallery as $data)

                                                    <img class="mt-1" width="100px"
                                                        src="{{ url('uploads/galleries/' . $data->image_file) }}" />

                                                @endforeach


                                            </div>



                                            <div class="col-md-6 form-group mt-2">
                                                <label class="text-capitalize ">Apartment Name</label>
                                                <input type="text" name="name" class="form-control text-capitalize"
                                                    value="{{ $apartment->apartment_name }}"
                                                    placeholder="Enter apartment name">
                                                @error('name')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 form-group mt-2">
                                                <label class="text-capitalize ">Apartment address</label>
                                                <input type="text" name="address" class="form-control text-capitalize"
                                                    value="{{ $apartment->address }}" placeholder="Enter property address">
                                                @error('address')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize ">Apartment size</label>
                                                <input type="text" name="flat_size" class="form-control text-capitalize"
                                                value="{{ $apartment->flat_size }}" placeholder="Enter flat size">
                                                @error('flat_size')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">contact</label>
                                                <input type="number" name="contact" class="form-control text-capitalize"
                                                value="{{ $apartment->contact }}" placeholder="Enter phone number">
                                                @error('contact')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">City</label>
                                                <select name="city" class="form-control form-control-lg"
                                                    id="exampleFormControlSelect2">
                                                    <option selected disabled>select</option>
                                                    @foreach ($district as $item)
                                                    <option {{$item->name == $item->name? 'selected': ''}} value="{{ $item->name }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('city')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">Rent/price</label>
                                                <input type="text" name="price" class="form-control text-capitalize"
                                                value="{{ $apartment->price }}" placeholder="Enter rent amount">
                                                @error('price')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">Bed</label>
                                                <input type="text" name="bed" class="form-control text-capitalize"
                                                value="{{ $apartment->bed }}" placeholder="Enter bed">
                                                @error('bed')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">drawing</label>
                                                <input type="text" name="drawing" class="form-control text-capitalize"
                                                value="{{ $apartment->drawing }}" placeholder="Enter drawing">
                                                @error('drawing')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">dining</label>
                                                <input type="text" name="dining" class="form-control text-capitalize"
                                                value="{{ $apartment->dining }}" placeholder="Enter dining">
                                                @error('dining')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">kitchen</label>
                                                <input type="text" name="kitchen" class="form-control text-capitalize"
                                                value="{{ $apartment->kitchen }}" placeholder="Enter kitchen">
                                                @error('kitchen')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">washroom</label>
                                                <input type="text" name="washroom" class="form-control text-capitalize"
                                                value="{{ $apartment->washroom }}" placeholder="Enter washroom">
                                                @error('washroom')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">Rent/Sell</label>
                                                <select name="select" class="form-control form-control-lg"
                                                    id="exampleFormControlSelect2">
                                                    <option selected disabled>select</option>
                                                    <option {{$apartment->rent_sell == 0? 'selected': ''}} value="0">Rent</option>
                                                    <option {{$apartment->rent_sell == 1? 'selected': ''}} value="1">Sell</option>
                                                </select>
                                                @error('select')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>


                                            <div class="col-md-12"><label
                                                    class="labels from-control text-capitalize mt-2">Description</label><textarea
                                                    name="text" class="form-control text-capitalize" id="" cols="50" 
                                                    rows="12">{{ $apartment->text }}</textarea>
                                                @error('text')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror

                                            </div>



                                        </div>
                                        <div class="mt-5 text-center"><button
                                                class="btn btn-primary profile-button  profile-button text-uppercase"
                                                type="submit"> <i class="far fa-check-square btn-icon-prepend"></i>
                                                Submit</button>
                                        </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <script>

           // single image preview------------------

            document.getElementById("file-id-preview").style.visibility = "hidden";

            function showPreview(event) {
                if (event.target.files.length > 0) {
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("file-id-preview");
                    preview.src = src;
                    preview.style.display = "block";
                    document.getElementById("file-id-preview").style.visibility = "visible";
                }
            }

            // multiple image preview---------------------------

        $("#uploadFile").change(function(){        
           $('#multiple_image_preview').html("");        
           var total_file=document.getElementById("uploadFile").files.length;        
           for(var i=0;i<total_file;i++)        
           {   
            $('#multiple_image_preview').append("imgsrc='"+URL.createObjectURL(event.target.files[i])+"'>");        
           }
        
        });
              

        </script>

    @endsection
