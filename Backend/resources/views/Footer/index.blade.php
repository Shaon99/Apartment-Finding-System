@extends('Layout.admin')

@section('main_content')
<div class="container-fluid">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p style="padding-left:1050px"><a class="btn btn-primary" href="/Admin/Dashboard">Back to home</a></p>
                    <h4 class="card-title">Update footer</h4>
                    <p class="card-description">
                        Update footer
                    </p>
                    <div>
                        <p style="color: red; font-size: 15px;">{{ session('congratulations') }}</p>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">About</label>
                            <input type="text" class="form-control" id="" name="about" placeholder="Write details" rows="4" value="{{ $footer['About'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('about') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Address</label>
                            <input type="text" class="form-control" id="" name="address" placeholder="Address" rows="4" value="{{ $footer['Address'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('address') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email" rows="4" value="{{ $footer['Email'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('email') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Contact No. (Phone number)</label>
                            <input type="text" class="form-control" id="exampleInputCity1" name="phone" placeholder="phone no." value="{{ $footer['Phone'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('phone') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">facebook</label>
                            <input type="text" class="form-control" name="facebook" placeholder="Facebook link" rows="4" value="{{ $footer['Facebook'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('facebook') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Twitter</label>.</label>
                            <input type="text" class="form-control" name="twitter" placeholder="Twitter link or Username" rows="4" value="{{ $footer['Twitter'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('twitter') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Instagram</label>.</label>
                            <input type="text" class="form-control" name="instagram" placeholder="Instagram link or Username" rows="4" value="{{ $footer['Twitter'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('instagram') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleinput1">Linkedin</label>
                            <input class="form-control" name="linkedin" placeholder="Linkedin link" rows="4" value="{{ $footer['Linkedin'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('linkedin') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleinput1">Youtube</label>
                            <input class="form-control" name="youtube" rows="4" placeholder="Youtube link" value="{{ $footer['Youtube'] }}">
                            <div>
                                <p style="color: red; font-size: 15px;">{{ $errors->first('youtube') }}</p>
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

<script src="{{asset('js/typeahead.js')}}"></script>
<script src="{{asset('js/select2.js')}}"></script>
@endsection