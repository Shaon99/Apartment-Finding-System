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
                                    <h2> {{ DB::table('Apartment')->where('Created_at', date("Y-m-d"))->count() }}</h2>
                                    <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                        Last week
                                    </p>
                                    <h2> {{ DB::table('Apartment')->whereBetween('Created_at', [date('Y-m-d', strtotime('-7 days')), date("Y-m-d")])->count() }} </h2>
                                    <label class="badge badge-outline-danger badge-pill">30% decrease</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                                        Last month
                                    </p>
                                    <h2> {{ DB::table('Apartment')->whereBetween('Created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill">12% increase</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-check-circle mr-2"></i>
                                        Blocked apartment
                                    </p>
                                    <h2> {{ DB::table('Apartment')->where('Status', 'Blocked')->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill">57% increase</label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-chart-line mr-2"></i>
                                        Total number of apartment
                                    </p>
                                    <h2> {{ DB::table('Apartment')->count() }} </h2>
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
                <input class="form-control" type="text" placeholder="enter apartment ID"><br>
                <button>Search</button> <br>
                <p style="padding-left:1000px"><a class="btn btn-primary" href="/Admin/BlockedApartment">All Blocked Apartment</a></p>
                <table class="table table-striped table-bordered">
                    <tr style="text-align: center">
                        <th>Apartment ID</th>
                        <th></th>
                        <th></th>
                        <th>Picture</th>
                        <th>Details</th>
                    </tr>
                    @for($i=0; $i < count($list); $i++) <tr style="text-align: center">
                        @if($list[$i]['Status'] == 'Open')
                        <td>{{$list[$i]['apartment_ID']}}</td>
                        <td> <a class="btn btn-warning" href="{{ route('Apartment.Details', [$list[$i]['apartment_ID']]) }}">Details</a></td>
                        <td> <a class="btn btn-danger" href="{{ route('Apartment.Block', [$list[$i]['apartment_ID']]) }}">Block</a></td>
                        <td style="width:300px">
                            <div>
                                <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/upload')}}/{{$list[$i]['Picture1']}}">
                                <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/upload')}}/{{$list[$i]['Picture2']}}">
                            </div>
                            <div>
                                <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/upload')}}/{{$list[$i]['Picture3']}}">
                                <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/upload')}}/{{$list[$i]['Picture4']}}">
                            </div>
                        </td>
                        <td style="text-align: left">
                            <p style="color: black; font-size:30px">Rent : {{$list[$i]['Rent']}} Tk. </p>
                            Home Address : <p style="color: blue; font-size:20px"> {{$list[$i]['Apartment_Address']}}</p>
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