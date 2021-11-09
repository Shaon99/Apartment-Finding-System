@extends('Layout.admin')

@section('main_content')
<div>
    <div class="container-fluid">
        <div class="content-wrapper">
            <h1 style="padding:10px; background-color:#ffffff">Apartment Owner :</h1>
            <div class="row grid-margin">
                <div class="col-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa fa-user mr-2"></i>
                                        New registered Seller
                                    </p>
                                    <h2> {{ DB::table('apartment_owner')->where('Created_at', date("Y-m-d"))->count() }}</h2>
                                    <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                        Last week
                                    </p>
                                    <h2> {{ DB::table('apartment_owner')->whereBetween('Created_at', [date('Y-m-d', strtotime('-7 days')), date("Y-m-d")])->count() }} </h2>
                                    <label class="badge badge-outline-danger badge-pill">30% decrease</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                                        Last month
                                    </p>
                                    <h2> {{ DB::table('apartment_owner')->whereBetween('Created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill">12% increase</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-check-circle mr-2"></i>
                                        Blocked Seller
                                    </p>
                                    <h2> {{ DB::table('apartment_owner')->where('Status', 'Blocked')->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill">57% increase</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-chart-line mr-2"></i>
                                        Total number of Seller
                                    </p>
                                    <h2> {{ DB::table('apartment_owner')->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill">10% increase</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form>
                @csrf
                <p style="color: red; font-size: 15px;">{{ session('msg') }}</p>
                <input class="form-control" type="text" placeholder="enter owner ID"><br>
                <button>Search</button> <br>
                <p style="padding-left:1050px"><a class="btn btn-primary" href="/ApartmentOwner/BlockedUser">All Blocked User</a></p>
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
                        <th>E-mail</th>
                        <th>Contact no.</th>
                    </tr>
                    @for($i=0; $i < count($list); $i++) <tr>
                        @if($list[$i]['Status'] == 'Open')
                        <td>{{$list[$i]['ID']}}</td>
                        <td> <a class="btn btn-success" href="{{ route('ApartmentOwner.Edit', [$list[$i]['ID']]) }}">Edit</a></td>
                        <td> <a class="btn btn-warning" href="{{ route('ApartmentOwner.Delete', [$list[$i]['ID']]) }}">Delete</a></td>
                        <td> <a class="btn btn-primary" href="{{ route('ApartmentOwner.Details', [$list[$i]['ID']]) }}">Details</a></td>
                        <td> <a class="btn btn-danger" href="{{ route('ApartmentOwner.Block', [$list[$i]['ID']]) }}">@if($list[$i]['Status'] == "Open") Block @else Unblock @endif</a></td>
                        <td><img class="img-rounded-circle" src="{{asset('/upload')}}/{{$list[$i]['Picture']}}" width="100px" height="100px">
                        </td>
                        <td>{{$list[$i]['First_name']}}</td>
                        <td>{{$list[$i]['Last_name']}}</td>
                        <td>{{$list[$i]['Status']}}</td>
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