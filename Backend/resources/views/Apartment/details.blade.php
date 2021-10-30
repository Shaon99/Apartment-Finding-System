@extends('Layout.admin')

@section('main_content')

<div class="container-fluid">
    <div class="content-wrapper">
        <h2 style="text-align: center; background-color: #ffffff">Details for, {{ $details[0]->apartment_ID }} :</h2>
        <center>
            <table class="table table-striped table-bordered">
                <tr>
                    <div>
                        <td style="width:300px; height:300px; text-align:center; vertical-align:middle">
                            <div>
                                <img style="border-radius: 1px; width: 280px; height:250px; padding-bottom:3px" src="{{asset('/upload')}}/{{$details[0]->Picture1}}">
                                <img style="border-radius: 1px; width: 280px; height:250px; padding-bottom:3px" src="{{asset('/upload')}}/{{$details[0]->Picture2}}">
                                <img style="border-radius: 1px; width: 280px; height:250px; padding-bottom:3px" src="{{asset('/upload')}}/{{$details[0]->Picture3}}">
                                <img style="border-radius: 1px; width: 280px; height:250px; padding-bottom:3px" src="{{asset('/upload')}}/{{$details[0]->Picture4}}">
                            </div>
                        </td>
                    </div>
                </tr>
            </table>
            <p style="color: black; font-size:35px; text-align:center">Apartment Details </p>
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Rent :</td>
                    <td>{{ $details[0]->Rent }}</td>
                </tr>
                <tr>
                    <td>Building Location :</td>
                    <td>{{ $details[0]->Apartment_Address}}</td>
                </tr>
                <tr>
                    <td>Number Of Kitchen :</td>
                    <td>{{ $details[0]->Kitchen}} </td>
                </tr>
                <tr>
                    <td>Number of Dining_space</td>
                    <td>{{ $details[0]->Dining_space }} </td>
                </tr>
                <tr>
                    <td>Number Of Bathroom : </td>
                    <td>{{ $details[0]->Bathroom }} </td>
                </tr>
                <tr>
                    <td>Number Of Total room</td>
                    <td>{{ $details[0]->Total_room}} </td>
                </tr>
                <tr>
                    <td>Elevator in the Building : </td>
                    <td> {{ $details[0]->Lift}} </td>
                </tr>
                <tr>
                    <td>Details</td>
                    <td>{{ $details[0]->Details}} </td>
                </tr>
                <tr>
                    <td>
                        <p style="color: black; font-size:35px; text-align:center">Owner's details</p>
                    </td>
                </tr>
                <tr>
                    <td>Full name :</td>
                    <td>
                        <p>{{ $details[0]->First_name }} {{ $details[0]->Last_name }}</p>
                    </td>
                </tr>
                <tr>
                    <td>Username :</td>
                    <td>{{ $details[0]->Username }}</td>
                </tr>
                <tr>
                    <td>Status :</td>
                    <td>{{ $details[0]->Status }}</td>
                </tr>
                <tr>
                    <td>E-mail :</td>
                    <td>{{ $details[0]->Email }}</td>
                </tr>
                <tr>
                    <td>Home Address :</td>
                    <td>{{ $details[0]->Address}}</td>
                </tr>
                <tr>
                    <td>Inserted at :</td>
                    <td>{{ $details[0]->Created_at }}</td>
                </tr>
                <tr>
                    <td>Last Updated :</td>
                    <td>{{ $details[0]->Updated_at }}</td>
                </tr>
                <tr>
                    <td>Contact no. :</td>
                    <td>{{ $details[0]->Phone}}</td>
                </tr>
                <tr>
                    <td>Gender :</td>
                    <td>{{ $details[0]->Gender}}</td>
                </tr>
            </table>
        </center>
    </div>
</div>

@endsection