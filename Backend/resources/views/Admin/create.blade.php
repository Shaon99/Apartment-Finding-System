@extends('Layout.admin')

@section('main_content')
<div class="container-fluid">
  <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p style="padding-left:1050px"><a class="btn btn-primary" href="/Admin/All">Back to list</a></p>
          <h4 class="card-title">Register new Admin</h4>
          <p class="card-description">
            Register new Admin
          </p>
          <div>
            <p style="color: red; font-size: 15px;">{{ session('congratulations') }}</p>
          </div>
          <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Profile Picture</label>
              <input type="file" name="profileImage" class="">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('profileImage') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">First Name</label>
              <input type="text" class="form-control" id="" name="first_name" placeholder="FirstName">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('first_name') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Last Name</label>
              <input type="text" class="form-control" id="" name="last_name" placeholder="LastName">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('last_name') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">User Name</label>
              <input type="text" class="form-control" name="user_name" placeholder="UserName">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('user_name') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('email') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword4" name="password" placeholder="Password">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('password') }}</p>
              </div>
              <div>
                <p style="color: red; font-size: 15px;">{{ session('password') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="Password4">Confirm Password</label>
              <input type="password" class="form-control" id="" name="Cpassword" placeholder="Confirm Password">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('password') }}</p>
              </div>
              <div>
                <p style="color: red; font-size: 15px;">{{ session('password') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <select class="form-control" name="gender" id="gender"">
                          <option disabled>Please select your Gender</option>
                          <option value=" Male">Male</option>
                <option value="Female">Female</option>
              </select>
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('gender') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Contact No.</label>
              <input type="text" class="form-control" id="exampleInputCity1" name="phone" placeholder="phone no.">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('phone') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Salary</label>
              <input type="text" class="form-control" name="salary" placeholder="salary">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('salary') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Date Of Birth</label>.</label>
              <input type="date" class="form-control" name="birth" placeholder="date of birth">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('birth') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Date Of Joining</label>.</label>
              <input type="date" class="form-control" name="joining" placeholder="date of birth">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('joining') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Home Address</label>
              <textarea class="form-control" name="address" rows="4"></textarea>
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('address') }}</p>
              </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="/Admin/All" class="btn btn-light">Cancel</a>
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