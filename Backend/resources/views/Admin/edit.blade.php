@extends('Layout.admin')

@section('main_content')
<div class="container-fluid">
  <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p style="padding-left:1050px"><a class="btn btn-primary" href="/Admin/All">Back to list</a></p>
          <h4 class="card-title">Edit Admin Information</h4>
          <p class="card-description">
            Admin Information for, {{ $admin['ID'] }}
          </p>
          <div>
            <p style="color: red; font-size: 15px;">{{ session('congratulations') }}</p>
          </div>
          <form method="post">
            @csrf
            {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputName1">First Name</label>
              <input type="text" class="form-control" name="first_name" placeholder="FirstName" value="{{ $admin['First_name'] }}">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('first_name') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Last Name</label>
              <input type="text" class="form-control" name="last_name" placeholder="LastName" value="{{ $admin['Last_name'] }}">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('last_name') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">User Name</label>
              <input type="text" class="form-control" name="user_name" placeholder="UserName" value="{{ $admin['Username'] }}">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('user_name') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Email address</label>
              <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $admin['Email'] }}">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('email') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <select class="form-control" name="gender" id="gender"">
                          <option value=" Male" @if($admin['Gender']=='Male' ) selected @endif>Male</option>
                <option value="Female" @if($admin['Gender']=='Female' ) selected @endif>Female</option>
              </select>
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('gender') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Contact No.</label>
              <input type="text" class="form-control" name="phone" placeholder="phone no." value="{{ $admin['Phone'] }}">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('phone') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Salary</label>
              <input type="text" class="form-control" name="salary" placeholder="salary" value="{{ $admin['Salary'] }}">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('salary') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Date Of Birth</label>.</label>
              <input type="date" class="form-control" name="birth" placeholder="date of birth" value="{{ $admin['DOB'] }}">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('birth') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Date Of Joining</label>.</label>
              <input type="date" class="form-control" name="joining" placeholder="date of birth" value="{{ $admin['Joining_date'] }}">
              <div>
                <p style="color: red; font-size: 15px;">{{ $errors->first('joining') }}</p>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Home Address</label>
              <input class="form-control" name="address" rows="4" value="{{ $admin['Address'] }}"></input>
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