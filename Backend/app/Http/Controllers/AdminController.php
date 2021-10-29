<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\NewAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Http\Requests\ChangePasswordRequest;

use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.index');
    }
    public function create()
    {
        return view('Admin.create');
    }

    public function show()
    {
        $adminList = Admin::all();
        return view('Admin.list')->with('list', $adminList);
    }
    public function edit($ID)
    {
        $admin = Admin::find($ID);
        return view('Admin.edit')->with('admin', $admin);
    }

    public function block($ID, Request $req)
    {
        $admin = Admin::find($ID);
        if ($admin->Status == "Open") {
            $admin->Status = "Blocked";
            $admin->save();
            $req->session()->flash('msg', 'This user has been blocked successfully!!...');
            return redirect()->route('Admin.BlockedUser');
        }
        if ($admin->Status == "Blocked") {
            $admin->Status = "Open";
            $admin->save();
            $req->session()->flash('msg', 'This user has been Unblocked successfully!!...');
            return redirect()->route('Admin.All');
        }
    }

    public function update($ID, UpdateAdminRequest $req)
    {
        $admin = Admin::find($ID);

        $admin->Username = $req->user_name;
        $admin->First_name = $req->first_name;
        $admin->Last_name = $req->last_name;
        $admin->Address = $req->address;
        $admin->Email = $req->email;
        $admin->Phone = $req->phone;
        $admin->Gender = $req->gender;
        $admin->DOB = $req->birth;
        $admin->Joining_date = $req->joining;
        $admin->Salary = $req->salary;
        $admin->Updated_at = date('Y-m-d H:i:s', time());

        $admin->save();

        $req->session()->flash('congratulations', 'Congratulations! information updated successfully!...');
        return view('Admin.Edit')->with('admin', $admin);
    }

    public function blockUser()
    {
        $adminList = Admin::all();
        return view('Admin.blockUser')->with('list', $adminList);
    }

    public function delete($ID, Request $req)
    {
        if (Admin::destroy($ID)) {
            $req->session()->flash('msg', 'Congratulations! Deleted Successfully!!...');
            return redirect()->route('Admin.All');
        } else {
            $req->session()->flash('msg', 'Error Ouuured!!...');
            return redirect()->route('Admin.All');
        }
    }

    public function details($ID, Request $req)
    {
        $admin = Admin::find($ID);
        return view('Admin.details')->with('admin', $admin);
    }

    public function profile()
    {
        $admin = Admin::find(session('ID'));
        return view('Admin.profile')->with('admin', $admin);
    }

    public function changePassword()
    {
        return view('Admin.changePassword');
    }

    public function storePassword(ChangePasswordRequest $req)
    {
        $admin = DB::table('admin')
            ->where('ID', session('ID'))
            ->get();

        if ($admin[0]->Password == md5($req->Opassword)) {
            if ($req->Npassword == $req->CNpassword) {

                DB::table('admin')->where('Username', $admin[0]->Username)->update(['Password' => md5($req->Npassword)]);

                $req->session()->flash('msg', 'Congratulations! Password change successfully..');
                return redirect()->route('Admin.changePassword');
            } else {
                $req->session()->flash('msg', 'Password and confirm password do not match...');
                return redirect()->route('Admin.changePassword');
            }
        } else {
            $req->session()->flash('msg', 'Old password does not match...');
            return redirect()->route('Admin.changePassword');
        }
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
