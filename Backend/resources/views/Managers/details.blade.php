@extends('Layout.admin')

@section('main_content')

<div class="container-fluid">
    <div class="content-wrapper">
        <h2 style="text-align: center; background-color: #ffffff">Details for {{$manager['id']}}, {{ $manager['name'] }} :</h2>
        <p style="padding-left:1050px"><a class="btn btn-primary" href="/Manager/All">Back to list</a></p>
        <center>
            <table class="table table-striped table-bordered">
                <tr>
                    <div>
                        <td style="width:300px; height:300px; text-align:center; vertical-align:middle">
                            <img src="{{asset('/upload')}}/{{ $manager['picture'] }}" style="border-radius:50%; width:100%; height:100%">
                        </td>
                        <td>
                            <p style="color: black; font-size:50px">{{ $manager['name'] }}</p>
                        </td>
                    </div>
                </tr>
            </table>
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Fullt name :</td>
                    <td>{{ $manager['name'] }}</td>
                </tr>
                <tr>
                    <td>Status :</td>
                    <td>{{ $manager['status'] }}</td>
                </tr>
                <tr>
                    <td>E-mail :</td>
                    <td>{{ $manager['email'] }}</td>
                </tr>
                <tr>
                    <td>Home Address :</td>
                    <td>{{ $manager['address']}}</td>
                </tr>
                <tr>
                    <td>Date of birth :</td>
                    <td>{{ $manager['birth'] }}</td>
                </tr>
                <tr>
                    <td>Inserted at :</td>
                    <td>{{ $manager['created_at'] }}</td>
                </tr>
                <tr>
                    <td>Last Updated :</td>
                    <td>{{ $manager['updated_at'] }}</td>
                </tr>
                <tr>
                    <td>Joining date :</td>
                    <td>{{ $manager['joining'] }}</td>
                </tr>
                <tr>
                    <td>Contact no. :</td>
                    <td>{{ $manager['phone']}}</td>
                </tr>
                <tr>
                    <td>Gender :</td>
                    <td>{{ $manager['gender']}}</td>
                </tr>
                <tr>
                    <td>Salary :</td>
                    <td>{{ $manager['salary']}}</td>
                </tr>
            </table>
        </center>
    </div>
</div>

@endsection