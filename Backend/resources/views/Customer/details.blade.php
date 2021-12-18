@extends('Layout.admin')

@section('main_content')

<div class="container-fluid">
    <div class="content-wrapper">
        <h2 style="text-align: center; background-color: #ffffff">Details for {{$customer->id }}, {{ $customer->name }} :</h2>
        <p style="padding-left:1050px"><a class="btn btn-primary" href="/Customer/All">Back to list</a></p>
        <center>
            <table class="table table-striped table-bordered">
                <tr>
                    <div>
                        <td style="width:300px; height:300px; text-align:center; vertical-align:middle">
                            <img src="{{asset('/upload/seller_image')}}/{{ $customer->image }}" style="border-radius:50%; width:100%; height:100%">
                        </td>
                        <td>
                            <p style="color: black; font-size:50px">{{ $customer->name }}</p>
                        </td>
                    </div>
                </tr>
            </table>
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Full name :</td>
                    <td>{{ $customer->name }}</td>
                </tr>
                <tr>
                    <td>Status :</td>
                    <td>{{ $customer->status }}</td>
                </tr>
                <tr>
                    <td>E-mail :</td>
                    <td>{{ $customer->email }}</td>
                </tr>
                <tr>
                    <td>Home Address :</td>
                    <td>{{ $customer->address}}</td>
                </tr>
                <tr>
                    <td>Inserted at :</td>
                    <td>{{ $customer->created_at }}</td>
                </tr>
                <tr>
                    <td>Last Updated :</td>
                    <td>{{ $customer->updated_at }}</td>
                </tr>
                <tr>
                    <td>Contact no. :</td>
                    <td>{{ $customer->phone}}</td>
                </tr>
            </table><br>
        </center>
    </div>
</div>

@endsection