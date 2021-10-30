@extends('Layout.admin')

@section('main_content')

<div class="container-fluid">
    <div class="content-wrapper">
        <h2 style="text-align: center; background-color: #ffffff">Details for, {{$details[0]->ID }} :</h2>
        <center>
            <table class="table table-striped table-bordered">
                <tr>
                    <div>
                        <td style="width:300px; height:300px; text-align:center; vertical-align:middle">
                            <img src="{{asset('/upload')}}/{{ $details[0]->Picture }}" style="border-radius:50%; width:100%; height:100%">
                        </td>
                        <td>
                            <p style="color: black; font-size:50px">{{ $details[0]->First_name }} {{ $details[0]->Last_name }}</p>
                        </td>
                    </div>
                </tr>
            </table>
            <table class="table table-striped table-bordered">
                <tr>
                    <td>First name :</td>
                    <td>{{ $details[0]->First_name }}</td>
                </tr>
                <tr>
                    <td>Last name :</td>
                    <td>{{ $details[0]->Last_name }}</td>
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
            </table><br>
            <table class="table table-striped table-bordered">
                @for($i=0; $i < count($details); $i++) <tr style="text-align: center">
                    @if($details[$i]->Status == 'Open')
                    <td>{{$details[$i]->apartment_ID}}</td>
                    <td> <a class="btn btn-warning" href="{{ route('Apartment.Details', [$details[$i]->ID]) }}">Details</a></td>
                    <td> <a class="btn btn-danger" href="{{ route('Apartment.Block', [$details[$i]->ID]) }}">Block</a></td>
                    <td style="width:300px">
                        <div>
                            <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/upload')}}/{{$details[$i]->Picture1}}">
                            <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/upload')}}/{{$details[$i]->Picture2}}">
                        </div>
                        <div>
                            <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/upload')}}/{{$details[$i]->Picture3}}">
                            <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/upload')}}/{{$details[$i]->Picture4}}">
                        </div>
                    </td>
                    <td style="text-align: left">
                        <p style="color: black; font-size:30px">Rent : {{$details[$i]->Rent}} Tk. </p>
                        Home Address : <p style="color: blue; font-size:20px"> {{$details[$i]->Apartment_Address}}</p>
                    </td>
                    </tr>
                    @endif
                    @endfor
            </table>
        </center>
    </div>
</div>

@endsection