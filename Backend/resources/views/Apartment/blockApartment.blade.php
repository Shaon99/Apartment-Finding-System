@extends('Layout.admin')

@section('main_content')
<div>
    <div class="container-fluid">
        <div class="content-wrapper">
            <h1 style="padding:10px; background-color:#ffffff">All Apartment :</h1>
            <div class="row grid-margin">
                <div class="col-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa fa-user mr-2"></i>
                                        New registered apartment
                                    </p>
                                    <h2> {{ DB::table('apartments')->where('created_at', date("Y-m-d"))->count() }}</h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                        Last week
                                    </p>
                                    <h2> {{ DB::table('apartments')->whereBetween('created_at', [date('Y-m-d', strtotime('-7 days')), date("Y-m-d")])->count() }} </h2>
                                    <label class="badge badge-outline-danger badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                                        Last month
                                    </p>
                                    <h2> {{ DB::table('apartments')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-check-circle mr-2"></i>
                                        Blocked apartment
                                    </p>
                                    <h2> {{ DB::table('apartments')->where('status', '0')->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-chart-line mr-2"></i>
                                        Total number of apartment
                                    </p>
                                    <h2> {{ DB::table('apartments')->count() }} </h2>
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
                <input class="form-control" type="text" placeholder="enter apartment ID"><br>
                <button class="btn btn-inverse-dark btn-fw">Search</button> <br><br>
                <p>
                    <a class="btn btn-outline-success" href="/Apartment/All">All</a>
                    <a class="btn btn-outline-info" href="/Apartment/recent">Recent</a>
                    <a class="btn btn-outline-info" href="/Apartment/last_week">Last Week</a>
                    <a class="btn btn-outline-info" href="/Apartment/last_month">Last Month</a>
                    <a class="btn btn-inverse-primary" href="/Admin/BlockedApartment">All Blocked Apartment</a>
                </p>
                <table class="table table-striped table-bordered">
                    <tr style="text-align: center">
                        <th>Apartment ID</th>
                        <th>Apartment name</th>
                        <th></th>
                        <th></th>
                        <th>Picture</th>
                        <th>City</th>
                        <th>Details</th>
                    </tr>
                    @for($i=0; $i < count($list); $i++) <tr style="text-align: center">
                        @if($list[$i]['status'] == '0')
                        <td>{{$list[$i]['id']}}</td>
                        <td>{{$list[$i]['apartment_name']}}</td>
                        <td> <a class="btn btn-inverse-warning" href="{{ route('Apartment.Details', [$list[$i]['id']]) }}">Details</a></td>
                        <td> <a class="btn btn-inverse-success" href="{{ route('Apartment.Block', [$list[$i]['id']]) }}">Unlock</a></td>
                        <td style="width:300px">
                            <div>
                                <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/uploads/apartment_image')}}/{{$list[$i]['image']}}">
                                <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/uploads/apartment_image')}}/{{$list[$i]['image']}}">
                            </div>
                            <div>
                                <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/uploads/apartment_image')}}/{{$list[$i]['image']}}">
                                <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/uploads/apartment_image')}}/{{$list[$i]['image']}}">
                            </div>
                        </td>
                        <td>{{$list[$i]['city']}}</td>
                        <td style="text-align: left">
                            <p style="color: black; font-size:30px">Rent : {{$list[$i]['price']}} Tk. </p>
                            Home Address : <p style="color: blue; font-size:20px"> {{$list[$i]['address']}}</p>
                        </td>
                        </tr>
                        @endif
                        @endfor
                </table>
            </form>
        </div>
    </div>
</div>
@endsection