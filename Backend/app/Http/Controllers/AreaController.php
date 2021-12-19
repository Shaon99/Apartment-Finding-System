<?php

namespace App\Http\Controllers;
use App\Models\Managers;
use App\Models\Districts;
use App\Http\Requests\NewManagersRequest;
use App\Http\Requests\UpdateManagersRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller
{
    public function create()
    {
        $city = Districts::all();
        return view('Managers.create')->with('city', $city);
    }

    public function show()
    {
        $manager = Managers::all();
        return view('Managers.list')->with('list', $manager);
    }
    public function storeManager(NewManagersRequest $req)
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
                    $manager = new Managers();
                    $manager->name = $req->name;
                    $manager->password = md5($req->password);
                    $manager->address = $req->address;
                    $manager->email = $req->email;
                    $manager->phone = $req->phone;
                    $manager->status = "1";
                    $manager->gender = $req->gender;
                    $manager->birth = $req->birth;
                    $manager->city = $req->city;
                    $manager->Joining = $req->joining;
                    $manager->salary = $req->salary;
                    $manager->picture = $filename;
                    $manager->created_at = date('Y-m-d H:i:s', time());
                    $manager->updated_at = date('Y-m-d H:i:s', time());

                    $manager->save();

                    $req->session()->flash('congratulations', 'Congratulations! New manager has been registered!...');
                    return redirect()->route('Managers.Create');
                } else {
                    $req->session()->flash('password', 'Password and confirmation password do not match...');
                    return redirect()->route('Managers.Create');
                }
            } else {
                $req->session()->flash('picture', 'Your uploaded file is not a picture...');
                return redirect()->route('Managers.Create');
            }
        } else {
            $req->session()->flash('picture', 'Please upload a picture...');
            return redirect()->route('Managers.Create');
        }
    }
    public function blockUser()
    {
        $managerList = Managers::all();
        return view('Managers.blockUser')->with('list', $managerList);
    }
    public function recent()
    {
        $managersList = DB::table('managers')
        ->orderBy('updated_at', 'desc')
        ->get();
        return view('Managers.filterList')->with('list', $managersList);
    }

    public function last_week()
    {
        $managersList = DB::table('managers')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 7 days')), date("Y-m-d")])
        ->orderBy('updated_at', 'desc')
        ->get();
        return view('Managers.filterList')->with('list', $managersList);
    }

    public function last_month()
    {
        $managersList = DB::table('managers')->whereBetween('created_at', [date('Y-m-d', strtotime(date("Y-m-d") . ' - 30 days')), date("Y-m-d")])
        ->orderBy('updated_at', 'desc')
        ->get();
        return view('Managers.filterList')->with('list', $managersList);
    }
    public function block($ID, Request $req)
    {
        $manager = Managers::find($ID);
        if ($manager->status == "1") {
            $manager->status = "0";
            $manager->updated_at = date('Y-m-d H:i:s', time());
            $manager->save();
            $req->session()->flash('msg', 'This user has been blocked successfully!!...');
            return redirect()->route('Managers.All');
        }
        if ($manager->status == "0") {
            $manager->status = "1";
            $manager->updated_at = date('Y-m-d H:i:s', time());
            $manager->save();
            $req->session()->flash('msg', 'This user has been Unblocked successfully!!...');
            return redirect()->route('Managers.All');
        }
    }
    public function delete($ID, Request $req)
    {
        if (Managers::destroy($ID)) {
            $req->session()->flash('msg', 'Congratulations! Deleted Successfully!!...');
            return redirect()->route('Managers.All');
        } else {
            $req->session()->flash('msg', 'Error Ouuured!!...');
            return redirect()->route('Managers.All');
        }
    }
    public function edit($ID)
    {
        $manager = Managers::find($ID);
        $city = Districts::all();
        return view('Managers.edit', compact('city', 'manager'));

    }
    public function update($ID, UpdateManagersRequest $req)
    {
        $manager = Managers::find($ID);

        $manager->name = $req->name;
        $manager->address = $req->address;
        $manager->email = $req->email;
        $manager->phone = $req->phone;
        $manager->gender = $req->gender;
        $manager->birth = $req->birth;
        $manager->city = $req->city;
        $manager->Joining = $req->joining;
        $manager->salary = $req->salary;
        $manager->updated_at = date('Y-m-d H:i:s', time());

        $manager->save();

        $req->session()->flash('congratulations', 'Congratulations! information updated successfully!...');
        $city = Districts::all();
        return view('Managers.edit', compact('city', 'manager'));
    }
    public function details($ID, Request $req)
    {
        $manager = Managers::find($ID);
        return view('Managers.details')->with('manager', $manager);
    }
}
