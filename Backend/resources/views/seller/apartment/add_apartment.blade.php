@extends('seller.master.master')

@section('main_content')
    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="container rounded bg-white ">

                            <div class="row">
                                <form action="{{ route('seller.storeApartment') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12 border-right">

                                        <div class="row ">

                                            <div class="col-md-6"><label class="labels text-capitalize">Feature
                                                    Picture</label><br>
                                                <input type="file" onchange="showPreview(event);" name="image"
                                                    class="btn btn-primary btn-sm profile-button  mt-2 text-uppercase" />
                                                <img id="file-id-preview" class="mt-2" width="150px" src="">

                                                @error('image')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>


                                            <div class="col-md-6  gallery"><label class="labels text-capitalize">Multiple
                                                    Picture</label><br>

                                                <input type="file" name="image_file[]" id="gallery-photo-add"
                                                    class="btn btn-primary btn-sm profile-button  mt-2 text-uppercase"
                                                    multiple />
                                                @error('image_file[]')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror

                                            </div>


                                            <div class="col-md-6 form-group mt-4">
                                                <label class="text-capitalize ">Apartment Name</label>
                                                <input type="text" name="name" class="form-control text-capitalize"
                                                    value="{{ old('name') }}" placeholder="Enter apartment name">
                                                @error('name')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 form-group mt-4">
                                                <label class="text-capitalize ">Apartment address</label>
                                                <input type="text" name="address" class="form-control text-capitalize"
                                                    value="{{ old('address') }}" placeholder="Enter property address">
                                                @error('address')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize ">Apartment size</label>
                                                <input type="text" name="flat_size" class="form-control text-capitalize"
                                                    value="{{ old('flat_size') }}" placeholder="Enter flat size">
                                                @error('flat_size')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">contact</label>
                                                <input type="number" name="contact" class="form-control text-capitalize"
                                                    value="{{ old('contact') }}" placeholder="Enter phone number">
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
                                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('city')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">Rent/price</label>
                                                <input type="text" name="price" class="form-control text-capitalize"
                                                    value="{{ old('price') }}" placeholder="Enter rent amount">
                                                @error('price')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">Bed</label>
                                                <input type="text" name="bed" class="form-control text-capitalize"
                                                    value="{{ old('bed') }}" placeholder="Enter bed">
                                                @error('bed')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">drawing</label>
                                                <input type="text" name="drawing" class="form-control text-capitalize"
                                                    value="{{ old('drawing') }}" placeholder="Enter drawing">
                                                @error('drawing')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">dining</label>
                                                <input type="text" name="dining" class="form-control text-capitalize"
                                                    value="{{ old('dining') }}" placeholder="Enter dining">
                                                @error('dining')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">kitchen</label>
                                                <input type="text" name="kitchen" class="form-control text-capitalize"
                                                    value="{{ old('kitchen') }}" placeholder="Enter kitchen">
                                                @error('kitchen')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">washroom</label>
                                                <input type="text" name="washroom" class="form-control text-capitalize"
                                                    value="{{ old('washroom') }}" placeholder="Enter washroom">
                                                @error('washroom')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="text-capitalize">Rent/Sell</label>
                                                <select name="select" class="form-control form-control-lg"
                                                    id="exampleFormControlSelect2">
                                                    <option selected disabled>select</option>
                                                    <option value="0">Rent</option>
                                                    <option value="1">Sell</option>

                                                </select>
                                                @error('select')
                                                    <p class="form-text text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>


                                            <div class="col-md-12"><label
                                                    class="labels from-control text-capitalize mt-2">Description</label><textarea
                                                    name="text" class="form-control text-capitalize" id="" cols="50"
                                                    rows="12"></textarea>
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
            //single_image_preview

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
            $(function() {
                // Multiple images preview in browser
                var imagesPreview = function(input, placeToInsertImagePreview) {
                    if (input.files) {
                        var filesAmount = input.files.length;
                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();
                            reader.onload = function(event) {
                                $($.parseHTML('<img class="ml-2 mt-2" Height="90px;" width="150px">')).attr(
                                    'src', event.target.result).appendTo(placeToInsertImagePreview);
                            }
                            reader.readAsDataURL(input.files[i]);
                        }
                    }
                };

                $('#gallery-photo-add').on('change', function() {
                    imagesPreview(this, '.gallery');
                });
            });
        </script>

    @endsection
