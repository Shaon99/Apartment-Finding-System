@extends('Layout.admin')

@section('main_content')
<div>
    <div class="container-fluid">
        <div class="content-wrapper">
            <h1 style="padding:10px; background-color:#ffffff">Apartment Owner (Seller) :</h1>
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
                                    <h2> {{ DB::table('sellers')->where('created_at', date("Y-m-d"))->count() }}</h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                        Last week
                                    </p>
                                    <h2> {{ DB::table('sellers')->whereBetween('created_at', [date('Y-m-d', strtotime('-7 days')), date("Y-m-d")])->count() }} </h2>
                                    <label class="badge badge-outline-danger badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                                        Last month
                                    </p>
                                    <h2> {{ DB::table('sellers')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-check-circle mr-2"></i>
                                        Blocked Seller
                                    </p>
                                    <h2> {{ DB::table('sellers')->where('status', '0')->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-chart-line mr-2"></i>
                                        Total number of Seller
                                    </p>
                                    <h2> {{ DB::table('sellers')->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
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
                <button class="btn btn-inverse-dark btn-fw">Search</button> <br><br>
                <p>
                    <a class="btn btn-outline-info" href="/ApartmentOwner/recent">Recent</a>
                    <a class="btn btn-outline-info" href="/ApartmentOwner/last_week">Last Week</a>
                    <a class="btn btn-outline-info" href="/ApartmentOwner/last_month">Last Month</a>
                    <a class="btn btn-primary" href="/ApartmentOwner/BlockedUser">All Blocked User</a>
                </p>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>User ID</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Profile picture</th>
                        <th>Full name</th>
                        <th>Status</th>
                        <th>E-mail</th>
                        <th>Contact no.</th>
                    </tr>
                    @for($i=0; $i < count($list); $i++) <tr>
                        @if($list[$i]['status'] == '1')
                        <td>{{$list[$i]['id']}}</td>
                        <td> <a class="btn btn-inverse-success" href="{{ route('ApartmentOwner.Edit', [$list[$i]['id']]) }}">Edit</a></td>
                        <td> <a class="btn btn-inverse-warning" href="{{ route('ApartmentOwner.Delete', [$list[$i]['id']]) }}">Delete</a></td>
                        <td> <a class="btn btn-inverse-primary" href="{{ route('ApartmentOwner.Details', [$list[$i]['id']]) }}">Details</a></td>
                        <td> <a class="btn btn-inverse-danger" href="{{ route('ApartmentOwner.Block', [$list[$i]['id']]) }}">@if($list[$i]['status'] == "1") Block @else Unblock @endif</a></td>
                        <td><img class="img-rounded-circle" src="{{asset('/uploads/seller_image')}}/{{$list[$i]['image']}}" width="100px" height="100px">
                        </td>
                        <td>{{$list[$i]['name']}}</td>
                        <td>{{$list[$i]['status']}}</td>
                        <td>{{$list[$i]['email']}}</td>
                        <td>{{$list[$i]['phone']}}</td>
                        </tr>
                        @endif
                        @endfor
                </table>
            </form>
        </div>
    </div>
</div>
@endsection