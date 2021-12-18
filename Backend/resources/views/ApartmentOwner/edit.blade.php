@extends('Layout.admin')

@section('main_content')
<div class="container-fluid">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit owner Information</h4>
                    <p class="card-description">
                    <p style="padding-left:1050px"><a class="btn btn-primary" href="/ApartmentOwner/All">Back to list</a></p>
                    owner Information for, {{ $owner['id'] }}
                    </p>
                    <div>
                        <p style="color: red; font-size: 15px;">{{ session('congratulations') }}</p>
                    </div>
                    <form method="post">
                        @csrf
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputName1">Full Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{ $owner['name'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('name') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $owner['email'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('email') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">City Name</label>
                            <input type="text" class="form-control" name="city" placeholder="City Name" value="{{ $owner['city'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('city') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Contact No.</label>
                            <input type="text" class="form-control" name="phone" placeholder="phone no." value="{{ $owner['phone'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('phone') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Home Address</label>
                            <input class="form-control" name="address" rows="4" value="{{ $owner['address'] }}"></input>
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('address') }}</p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/ApartmentOwner/All" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/file-upload.js')}}"></script>
<script src="{{asset('js/typeahead.js')}}"></script>
<script src="{{asset('js/select2.js')}}"></script>
@endsection