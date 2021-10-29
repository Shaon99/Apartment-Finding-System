@extends('Layout.admin')

@section('main_content')
<div class="container-fluid">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit owner Information</h4>
                    <p class="card-description">
                        owner Information for, {{ $owner['ID'] }}
                    </p>
                    <div>
                        <p style="color: red; font-size: 15px;">{{ session('congratulations') }}</p>
                    </div>
                    <form method="post">
                        @csrf
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputName1">First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="FirstName" value="{{ $owner['First_name'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('first_name') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="LastName" value="{{ $owner['Last_name'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('last_name') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">User Name</label>
                            <input type="text" class="form-control" name="user_name" placeholder="UserName" value="{{ $owner['Username'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('user_name') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $owner['Email'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('email') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" id="gender"">
                            <option value=" Male" @if($owner['Gender']=='Male' ) selected @endif>Male</option>
                                <option value="Female" @if($owner['Gender']=='Female' ) selected @endif>Female</option>
                            </select>
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('gender') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Contact No.</label>
                            <input type="text" class="form-control" name="phone" placeholder="phone no." value="{{ $owner['Phone'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('phone') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Home Address</label>
                            <input class="form-control" name="address" rows="4" value="{{ $owner['Address'] }}"></input>
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('address') }}</p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
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