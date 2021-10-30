@extends('Layout.admin')

@section('main_content')
<div>
    <div class="container-fluid">
        <div class="content-wrapper">
            <h1 style="padding:10px; background-color:#ffffff">All Apartment :</h1>
            <form>
                @csrf
                <p style="color: red; font-size: 15px;">{{ session('msg') }}</p>
                <input class="form-control" type="text" placeholder="enter apartment ID"><br>
                <button>Search</button> <br>
                <p style="padding-left:1000px"><a class="btn btn-primary" href="/Apartment/All">All Regular Apartment</a></p>
                <table class="table table-striped table-bordered">
                    <tr style="text-align: center">
                        <th>Apartment ID</th>
                        <th></th>
                        <th></th>
                        <th>Picture</th>
                        <th>Details</th>
                    </tr>
                    @for($i=0; $i < count($list); $i++) <tr style="text-align: center">
                        @if($list[$i]['Status'] == 'Blocked')
                        <td>{{$list[$i]['apartment_ID']}}</td>
                        <td> <a class="btn btn-warning" href="{{ route('Admin.Delete', [$list[$i]['apartment_ID']]) }}">Details</a></td>
                        <td> <a class="btn btn-success" href="{{ route('Apartment.Block', [$list[$i]['apartment_ID']]) }}">Unblock</a></td>
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