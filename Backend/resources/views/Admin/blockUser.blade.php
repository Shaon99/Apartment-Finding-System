@extends('Layout.admin')

@section('main_content')
<div>
    <div class="container-fluid">
        <div class="content-wrapper">
            <h1 style="padding:10px; background-color:#ffffff">Block Admin List</h1>
            <form>
                @csrf
                <p style="color: red; font-size: 15px;">{{ session('msg') }}</p>
                <input class="form-control" type="text" placeholder="enter employee ID"><br>
                <button>Search</button> <br>
                <p style="padding-left:1050px"><a class="btn btn-primary" href="/Admin/All">All regular User</a></p>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>User ID</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Profile picture</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Status</th>
                        <th>Salary</th>
                        <th>E-mail</th>
                        <th>Contact no.</th>
                    </tr>
                    @for($i=0; $i < count($list); $i++) <tr>
                        @if($list[$i]['Status'] == 'Blocked')
                        <td>{{$list[$i]['ID']}}</td>
                        <td> <a class="btn btn-inverse-success" href="{{ route('Admin.Edit', [$list[$i]['ID']]) }}">Edit</a></td>
                        <td> <a class="btn btn-inverse-warning" href="{{ route('Admin.Delete', [$list[$i]['ID']]) }}">Delete</a></td>
                        <td> <a class="btn btn-inverse-primary" href="{{ route('Admin.Details', [$list[$i]['ID']]) }}">Details</a></td>
                        <td> <a class="btn btn-inverse-danger" href="{{ route('Admin.Block', [$list[$i]['ID']]) }}">@if($list[$i]['Status'] == "Open") Block @else Unblock @endif</a></td>
                        <td><img class="img-rounded-circle" src="{{asset('/upload')}}/{{$list[$i]['Picture']}}" width="100px" height="100px"></td>
                        <td>{{$list[$i]['First_name']}}</td>
                        <td>{{$list[$i]['Last_name']}}</td>
                        <td>{{$list[$i]['Status']}}</td>
                        <td>{{$list[$i]['Salary']}}</td>
                        <td>{{$list[$i]['Email']}}</td>
                        <td>{{$list[$i]['Phone']}}</td>
                        </tr>
                        @endif
                        @endfor
                </table>
            </form>
        </div>
    </div>
</div>
@endsection