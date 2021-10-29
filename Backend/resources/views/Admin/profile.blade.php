@extends('Layout.admin')

@section('main_content')

<div class="container-fluid">
    <div class="content-wrapper">
        <h2 style="text-align: center; background-color: #ffffff">{{ $admin['First_name'] }}'s Profile :</h2>
        <table class="table table-striped table-bordered">
            <tr>
                <div>
                    <td style="width:500px; height:500px; text-align:center; vertical-align:middle">
                        <img src="{{asset('/upload')}}/{{ $admin['Picture'] }}" style="border-radius:50%; width:100%; height:100%">
                    </td>
                    <td>
                        <p style="color: black; font-size: 20px;">
                        <table>
                            <tr>
                                <td>First name :</td>
                                <td>{{ $admin['First_name'] }}</td>
                            </tr>
                            <tr>
                                <td>Last name :</td>
                                <td>{{ $admin['Last_name'] }}</td>
                            </tr>
                            <tr>
                                <td>Username :</td>
                                <td>{{ $admin['Username'] }}</td>
                            </tr>
                            <tr>
                                <td>Status :</td>
                                <td>{{ $admin['Status'] }}</td>
                            </tr>
                            <tr>
                                <td>E-mail :</td>
                                <td>{{ $admin['Email'] }}</td>
                            </tr>
                            <tr>
                                <td>Home Address :</td>
                                <td>{{ $admin['Address']}}</td>
                            </tr>
                            <tr>
                                <td>Date of birth :</td>
                                <td>{{ $admin['DOB'] }}</td>
                            </tr>
                            <tr>
                                <td>Joining date :</td>
                                <td>{{ $admin['Joining_date'] }}</td>
                            </tr>
                            <tr>
                                <td>Contact no. :</td>
                                <td>{{ $admin['Phone']}}</td>
                            </tr>
                            <tr>
                                <td>Gender :</td>
                                <td>{{ $admin['Gender']}}</td>
                            </tr>
                            <tr>
                                <td>Salary :</td>
                                <td>{{ $admin['Salary']}}</td>
                            </tr>
                        </table>
                        </p>
                    </td>
                </div>
            </tr>
        </table>
    </div>
</div>

@endsection