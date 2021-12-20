<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Footer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewAdminRequest;
use App\Http\Requests\FooterRequest;
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
        $list = Admin::all();
        return view('Admin.list',compact('list'));
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
    public function search(Request $req)
    {
        if ($req->ajax()) {
            $data = Admin::where('ID', 'like', $req->search . '%')
                ->orwhere('First_name', 'like', $req->search . '%')
                ->orwhere('Username', 'like', $req->search . '%')
                ->orwhere('Email', 'like', $req->search . '%')
                ->orwhere('Address', 'like', $req->search . '%')
                ->orwhere('Joining_date', 'like', $req->search . '%')
                ->orwhere('Gender', 'like', $req->search . '%')
                ->get();
            $output = '';
            if (count($data) > 0) {
                $output = '
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>User ID</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Profile picture</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Status</th>
                            <th>Salary</th>
                            <th>E-mail</th>
                            <th>Contact no.</th>
                        </tr>
                            ';
                foreach ($data as $list) {
                    $output .= '
                        <tr>
                        <td>' . $list->ID . '</td>
                        <td> <a class="btn btn-inverse-success" href="/Admin/Edit/' . $list->ID . '">Edit</a></td>
                        <td> <a class="btn btn-inverse-warning" href="/Admin/Delete/' . $list->ID . '">Delete</a></td>
                        <td> <a class="btn btn-inverse-primary" href="/Admin/Details/' . $list->ID . '">Details</a></td>
                        <td> <a class="btn btn-inverse-danger" href="/Admin/Block/' . $list->ID . '">Block</a></td>
                        <td><img cl->mg-rounded-circle" src="../../public/' . $list->Picture . '" width="100px" height="100px"></td>
                        <td>' . $list->First_name . '</td>
                        <td>' . $list->Last_name . '</td>
                        <td>' . $list->Status . '</td>
                        <td>' . $list->Salary . '</td>
                        <td>' . $list->Email . '</td>
                        <td>' . $list->Phone . '</td>
                    ->
                    ';
                }
                $output .= '</table>';
            } else {
                $output .= 'No results found!!';
            }
        }
    }
    public function footer()
    {
        $footer = Footer::find(1);
        return view('Footer.index')->with('footer', $footer);
    }
    public function storeFooter(FooterRequest $req)
    {
        $footer = Footer::find(1);

        $footer->About = $req->about;
        $footer->Address = $req->address;
        $footer->Phone = $req->phone;
        $footer->Email = $req->email;
        $footer->Facebook = $req->facebook;
        $footer->Twitter = $req->twitter;
        $footer->Linkedin = $req->linkedin;
        $footer->Youtube = $req->youtube;
        $footer->updated_at = date('Y-m-d H:i:s', time());

        $footer->save();

        $req->session()->flash('congratulations', 'Congratulations! information updated successfully!...');
        return view('Footer.index')->with('footer', $footer);
    }

    public function recent()
    {
        $adminList = DB::table('admin')
            ->orderBy('Updated_at', 'desc')
            ->orderBy('Created_at', 'desc')
            ->get();
        return view('Admin.filterList')->with('list', $adminList);
    }

    public function last_week()
    {
        $adminList = DB::table('admin')->whereBetween('Created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 7 days')), date("Y-m-d")])
            ->orderBy('Created_at', 'desc')
            ->orderBy('Updated_at', 'desc')
            ->get();
        return view('Admin.filterList')->with('list', $adminList);
    }

    public function last_month()
    {
        $adminList = DB::table('admin')->whereBetween('Created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])
            ->orderBy('Created_at', 'desc')
            ->orderBy('Updated_at', 'desc')
            ->get();
        return view('Admin.filterList')->with('list', $adminList);
    }
}
