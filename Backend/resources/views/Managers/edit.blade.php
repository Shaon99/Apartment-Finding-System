@extends('Layout.admin')

@section('main_content')
<div class="container-fluid">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p style="padding-left:1050px"><a class="btn btn-primary" href="/Manager/All">Back to list</a></p>
                    <h4 class="card-title">Edit Manager Information</h4>
                    <p class="card-description">
                        Edit Manager Information
                    </p>
                    <div>
                        <p style="color: red; font-size: 15px;">{{ session('congratulations') }}</p>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">First Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="{{ $manager['name'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('name') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email" value="{{ $manager['email'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('email') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value=" Male" @if($manager['gender']=='Male' ) selected @endif>Male</option>
                                <option value="Female" @if($manager['gender']=='Female' ) selected @endif>Female</option>
                            </select>
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('gender') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city">City Name</label>
                            <select class="form-control" name="city" id="city">
                                @for($i=0; $i < count($city); $i++) <option value="{{$city[$i]['name']}}" @if($manager['city']==$city[$i]['name'] ) selected @endif>{{$city[$i]['bn_name']}}</option>
                                    @endfor
                            </select>
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('gender') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Contact No.</label>
                            <input type="text" class="form-control" id="exampleInputCity1" name="phone" placeholder="phone no." value="{{ $manager['phone'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('phone') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Salary</label>
                            <input type="text" class="form-control" name="salary" placeholder="salary" value="{{ $manager['salary'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('salary') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Date Of Birth</label>.</label>
                            <input type="date" class="form-control" name="birth" placeholder="date of birth" value="{{ $manager['birth'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('birth') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Date Of Joining</label>.</label>
                            <input type="date" class="form-control" name="joining" placeholder="date of birth" value="{{ $manager['joining'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('joining') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Home Address</label>
                            <input type="text" class="form-control" name="address" rows="4" value="{{ $manager['address'] }}"></input>
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('address') }}</p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="/Manager/All" class="btn btn-light">Cancel</a>
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