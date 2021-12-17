@extends('seller.master.master')

@section('main_content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          Profile
        </h3>
      </div>
<div class="row">

    <div class="col-md-8 pl-md-0">
        <div class="auth-form-wrapper">
            <div class="mb-2">
                @if (Auth::user()->image)
                <img height="100px"width="100px" src="{{ url('uploads/seller_image/' . Auth::user()->image) }}" alt="profile">
            @else
                <img height="100px"width="100px" src="{{ url('seller.jpg') }}" alt="profile">
            @endif
            </div>
            <form action="{{route('seller.updateprofile')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Name</label>
                    <input type="text" class="form-control" id="edit-name" name="name"
                        value="{{ old('name', $seller->name) }}" placeholder="Enter your Name" required>
                    <strong><span id="edit_name_error" class="invalid-feedback d-block mb-3" role="alert">
                        </span> </strong>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Mobile No</label>
                    <input type="number" class="form-control" minlength="11" id="edit-phone" name="phone"
                        value="{{ old('phone', $seller->phone) }}" placeholder="Enter Mobile No" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="edit-email" name="email"
                        value="{{ old('email', $seller->email) }}" placeholder="Enter Email" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="address" name="address"
                        value="{{ old('address', $seller->address) }}" placeholder="Enter Address" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image"  id="edit-image"
                        class="form-control ">
                   
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="edit-password" class="form-control" minlength="6"
                        placeholder="Enter Password minimum 6">

                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">Update</bu>
                </div>
            </form>
        </div>
    </div>
</div>
    </div></div>
@endsection