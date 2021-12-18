@extends('Layout.admin')

@section('main_content')
<div>
    <div class="container-fluid">
        <div class="content-wrapper">
            <h1 style="padding:10px; background-color:#ffffff">All Admin List</h1>
            <div class="row grid-margin">
                <div class="col-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa fa-user mr-2"></i>
                                        New registered Admin
                                    </p>
                                    <h2> {{ DB::table('admin')->where('Created_at', date("Y-m-d"))->count() }}</h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                        Last week
                                    </p>
                                    <h2> {{ DB::table('admin')->whereBetween('Created_at', [date('Y-m-d', strtotime('-7 days')), date("Y-m-d")])->count() }} </h2>
                                    <label class="badge badge-outline-danger badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                                        Last month
                                    </p>
                                    <h2> {{ DB::table('admin')->whereBetween('Created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-check-circle mr-2"></i>
                                        Blocked Admin
                                    </p>
                                    <h2> {{ DB::table('admin')->where('Status', 'Blocked')->count() }} </h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-chart-line mr-2"></i>
                                        Total number of Admin
                                    </p>
                                    <h2> {{ DB::table('admin')->count() }} </h2>
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
                <input class="form-control" type="text" name="search" id='search' placeholder="enter employee ID, name, E-mail etc" onekeyup="document()"><br>
                <button class="btn btn-inverse-dark btn-fw" onclick="">Search</button> <br><br>
                <div id="search_list"></div>
                <p>
                    <a class="btn btn-outline-success" href="/Admin/All">All</a>
                    <a class="btn btn-outline-success" href="/Admin/recent">Recent</a>
                    <a class="btn btn-outline-success" href="/Admin/last_week">Last Week</a>
                    <a class="btn btn-outline-success" href="/Admin/last_month">Last Month</a>
                    <a class="btn btn-primary" href="/Admin/BlockedUser">All Blocked User</a>
                </p>
                @if(count($list) > 0)
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
                        @if($list[$i]->Status == 'Open')
                        <td>{{ $list[$i]->ID }}</td>
                        <td> <a class="btn btn-inverse-success" href="{{ route('Admin.Edit', [$list[$i]->ID]) }}">Edit</a></td>
                        <td> <a class="btn btn-inverse-warning" href="{{ route('Admin.Delete', [$list[$i]->ID]) }}">Delete</a></td>
                        <td> <a class="btn btn-inverse-primary" href="{{ route('Admin.Details', [$list[$i]->ID]) }}">Details</a></td>
                        <td> <a class="btn btn-inverse-danger" href="{{ route('Admin.Block', [$list[$i]->ID]) }}">@if($list[$i]->Status == "Open") Block @else Unblock @endif</a></td>
                        <td><img class="img-rounded-circle" src="{{asset('/upload')}}/{{$list[$i]->Picture}}" width="100px" height="100px"></td>
                        <td>{{$list[$i]->First_name}}</td>
                        <td>{{$list[$i]->Last_name}}</td>
                        <td>{{$list[$i]->Status}}</td>
                        <td>{{$list[$i]->Salary}}</td>
                        <td>{{$list[$i]->Email}}</td>
                        <td>{{$list[$i]->Phone}}</td>
                        </tr>
                        @endif
                        @endfor
                </table>
                @endif
                @if(count($list) == 0)
                <h6 style="padding:10px; background-color:#ffffff; text-align:center; padding-left:1190px;"></h6>
                <h3 style="padding:10px; background-color:#ffffff; text-align:center; color:#110000">No results found..!!</h3>
                @endif
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var query = $(this).val();
            $.ajax({
                url: "search",
                type: "GET",
                data: {
                    'search': query
                },
                success: function(data) {
                    $('#search_list').html(data);
                }
            });
        });
    });
</script>
@endsection