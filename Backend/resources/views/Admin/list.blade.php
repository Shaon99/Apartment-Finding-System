@extends('Layout.admin')

@section('main_content')

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
                                    <h2> {{ DB::table('admin')->where('Created_at', date('Y-m-d'))->count() }}</h2>
                                    <label class="badge badge-outline-success badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                        Last week
                                    </p>
                                    <h2> {{ DB::table('admin')->whereBetween('Created_at', [date('Y-m-d', strtotime('-7 days')), date('Y-m-d')])->count() }}
                                    </h2>
                                    <label class="badge badge-outline-danger badge-pill"></label>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                                        Last month
                                    </p>
                                    <h2> {{ DB::table('admin')->whereBetween('Created_at', [date('Y-m-d', strtotime(date('Y-m-d') . ' - 30 days')), date('Y-m-d')])->count() }}
                                    </h2>
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

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Profile picture</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Status</th>
                                            <th>Salary</th>
                                            <th>E-mail</th>
                                            <th>Contact no.</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($list as $item)
                                            <tr>
                                                <td>{{ $item->ID }}</td>
                                                <td><img class="img-rounded-circle"
                                                        src="{{ asset('/upload/' . $item->Picture) }}" width="100px"
                                                        height="100px"></td>
                                                <td>{{ $item->First_name }}</td>
                                                <td>{{ $item->Last_name }}</td>
                                                <td class="text-capitalize">
                                                    <span
                                                        class="badge badge-danger">{{ $item->Status == 'Blocked' ? 'Blocked' : '' }}</span>
                                                    <span
                                                        class="badge badge-success">{{ $item->Status == 'Open' ? 'Open' : '' }}</span>
                                                </td>
                                                <td>{{ $item->Salary }}</td>
                                                <td>{{ $item->Email }}</td>
                                                <td>{{ $item->Phone }}</td>
                                                <td>
                                                    <a class="btn btn-inverse-success"
                                                        href="{{ route('Admin.Edit', $item->ID) }}">Edit</a>
                                                    <a class="btn btn-inverse-warning"
                                                        href="{{ route('Admin.Delete', $item->ID) }}">Delete</a>

                                                    <a class="btn btn-inverse-primary"
                                                        href="{{ route('Admin.Details', $item->ID) }}">Details</a>

                                                    <a class="btn btn-inverse-danger"
                                                        href="{{ route('Admin.Block', $item->ID) }}">
                                                        @if ($item->Status == 'Open') Block @else Unblock @endif</a>
                                                </td>

                                            </tr>
                                        @empty
                                            <p>Not found</p>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>


@endsection
