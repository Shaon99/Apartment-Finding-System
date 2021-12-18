@extends('Layout.admin')

@section('main_content')

<div class="container-fluid">
    <div class="content-wrapper">
        <h2 style="text-align: center; background-color: #ffffff">Details for, {{$details[0]->id }},{{ $details[0]->name }}</h2>
        <p style="padding-left:1050px"><a class="btn btn-primary" href="/ApartmentOwner/All">Back to list</a></p>
        <center>
            <table class="table table-striped table-bordered">
                <tr>
                    <div>
                        <td style="width:300px; height:300px; text-align:center; vertical-align:middle">
                            <img src="{{asset('/uploads/seller_image')}}/{{ $details[0]->image }}" style="border-radius:50%; width:100%; height:100%">
                        </td>
                        <td>
                            <p style="color: black; font-size:50px">{{ $details[0]->name }}</p>
                        </td>
                    </div>
                </tr>
            </table>
            <table class="table table-striped table-bordered">
                <tr>
                    <td>Full name :</td>
                    <td>{{ $details[0]->name }}</td>
                </tr>
                <tr>
                    <td>Status :</td>
                    <td>{{ $details[0]->status }}</td>
                </tr>
                <tr>
                    <td>E-mail :</td>
                    <td>{{ $details[0]->email }}</td>
                </tr>
                <tr>
                    <td>Home Address :</td>
                    <td>{{ $details[0]->address}}</td>
                </tr>
                <tr>
                    <td>Inserted at :</td>
                    <td>{{ $details[0]->created_at }}</td>
                </tr>
                <tr>
                    <td>Last Updated :</td>
                    <td>{{ $details[0]->updated_at }}</td>
                </tr>
                <tr>
                    <td>Contact no. :</td>
                    <td>{{ $details[0]->phone}}</td>
                </tr>
                <tr>
                    <td>City Name :</td>
                    <td>{{ $details[0]->city}}</td>
                </tr>
            </table><br>
            <table class="table table-striped table-bordered">
                @for($i=0; $i < count($details); $i++) <tr style="text-align: center">
                    @if($details[$i]->status == '1')
                    <td>{{$details[$i]->id}}</td>
                    <td> <a class="btn btn-inverse-warning" href="{{ route('Apartment.Details', [$details[$i]->id]) }}">Details</a></td>
                    <td> <a class="btn btn-inverse-danger" href="{{ route('Apartment.Block', [$details[$i]->id]) }}">Block</a></td>
                    <td style="width:300px">
                        <div>
                            <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/uploads/apartment_image')}}/{{$details[$i]->image}}">
                            <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/uploads/apartment_image')}}/{{$details[$i]->image}}">
                        </div>
                        <div>
                            <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/uploads/apartment_image')}}/{{$details[$i]->image}}">
                            <img style="border-radius: 1px; width: 125px; height:100px; padding-bottom:3px" src="{{asset('/uploads/apartment_image')}}/{{$details[$i]->image}}">
                        </div>
                    </td>
                    <td style="text-align: left">
                        <p style="color: black; font-size:30px">Rent : {{$details[$i]->price}} Tk. </p>
                        Home Address : <p style="color: blue; font-size:20px"> {{$details[$i]->address}}</p>
                    </td>
                    </tr>
                    @endif
                    @endfor
            </table>
        </center>
    </div>
</div>

@endsection