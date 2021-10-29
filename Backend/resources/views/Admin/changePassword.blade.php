@extends('Layout.admin')

@section('main_content')
<div class="container-fluid">
    <div class="content-wrapper">
        <h2 style="text-align: center; background-color: #ffffff">Change Password :</h2>
        <form method="post">
            @csrf
            <p style="color: red; font-size:15px">{{ session('msg') }}</p>
            <table>
                <tr>
                    <td>
                        Old Password :
                    </td>
                    <td>
                        <input class="form-control" type="password" name="Opassword" value="" placeholder="Old Password">
                        <div>
                            <p style="color: red; font-size: 15px;">{{ $errors->first('Opassword') }}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        New Password :
                    </td>
                    <td>
                        <input class="form-control" type="password" name="Npassword" value="" placeholder="New Password">
                        <div>
                            <p style="color: red; font-size: 15px;">{{ $errors->first('Npassword') }}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirm new password :
                    </td>
                    <td>
                        <input class="form-control" type="password" name="CNpassword" value="" placeholder="Confirm new password">
                        <div>
                            <p style="color: red; font-size: 15px;">{{ $errors->first('CNpassword') }}</p>
                        </div>
                    </td>
                </tr>
            </table>
            <br><input class="btn btn-primary" type="submit" name="submit" value="Change password">
        </form>
    </div>
</div>
@endsection