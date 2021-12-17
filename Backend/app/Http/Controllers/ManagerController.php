<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function create()
    {
        return view('Admin.create');
    }

    public function show()
    {
        $adminList = Admin::all();
        return view('Admin.list')->with('list', $adminList);
    }
    public function storeAdmin(NewAdminRequest $req)
    {
        if ($req->hasFile('profileImage')) {
            $file = $req->file('profileImage');
            if (
                $file->getClientOriginalExtension() == 'jpeg' || $file->getClientOriginalExtension() == 'JPEG' ||
                $file->getClientOriginalExtension() == 'jpg' || $file->getClientOriginalExtension() == 'JPG' ||
                $file->getClientOriginalExtension() == 'img' || $file->getClientOriginalExtension() == 'IMG' ||
                $file->getClientOriginalExtension() == 'png' || $file->getClientOriginalExtension() == 'PNG'
            ) {
                $filename = time() . "." . $file->getClientOriginalExtension();
                $file->move('upload', $filename);

                if ($req->password == $req->Cpassword) {
                    $admin = new Admin();
                    $admin->Username = $req->user_name;
                    $admin->First_name = $req->first_name;
                    $admin->Last_name = $req->last_name;
                    $admin->Password = md5($req->password);
                    $admin->Address = $req->address;
                    $admin->Email = $req->email;
                    $admin->Phone = $req->phone;
                    $admin->Status = "Open";
                    $admin->Gender = $req->gender;
                    $admin->DOB = $req->birth;
                    $admin->Joining_date = $req->joining;
                    $admin->Salary = $req->salary;
                    $admin->Picture = $filename;
                    $admin->Created_at = date('Y-m-d H:i:s', time());

                    $admin->save();

                    $req->session()->flash('congratulations', 'Congratulations! New employee has been registered!...');
                    return redirect()->route('Admin.Create');
                } else {
                    $req->session()->flash('password', 'Password and confirmation password do not match...');
                    return redirect()->route('Admin.Create');
                }
            } else {
                $req->session()->flash('picture', 'Your uploaded file is not a picture...');
                return redirect()->route('Admin.Create');
            }
        } else {
            $req->session()->flash('picture', 'Please upload a picture...');
            return redirect()->route('Admin.Create');
        }
    }
}
