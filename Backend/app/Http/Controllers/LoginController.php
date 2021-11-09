<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(){
        return view('Login.index');
    }
    public function verify(LoginRequest $req){   
        $admin = DB::table('admin')
                ->where('Username', $req->Username)
                ->where('Password',md5($req->Password))
                ->get();
        $customer = DB::table('customer')
                ->where('Username', $req->Username)
                ->where('Password', md5($req->Password))
                ->get();
        $seller = DB::table('apartment_owner')
                ->where('Username', $req->Username)
                ->where('Password', md5($req->Password))
                ->get();

        if($req->Username == " " || $req->Password == " "){
            $req->session()->flash('msg', 'Null username or password...!!!');
            return redirect('/admin/login');

        }
        elseif(count($admin) > 0){
            if($admin[0]->Status == 'Open'){
            $req->session()->put('Usertype','Admin');
            $req->session()->put('First_name',$admin[0]->First_name);
            $req->session()->put('Picture',$admin[0]->Picture);
            $req->session()->put('ID',$admin[0]->ID);
            return redirect()->route('Admin.Dashboard'); 
            }else if($admin[0]->Status == 'Blocked'){
            $req->session()->flash('msg', 'Your account has blocked. Contact super admin for further assistance..!!');
            return redirect('/admin/login'); 
            }else{
            $req->session()->flash('msg', 'Invalid req ... at first logged in as an Admin !!');
            return redirect('/admin/login');                
            }             
        } elseif (count($customer) > 0) {
            if ($customer[0]->Status == 'Open') {
                $req->session()->put('Usertype', 'Customer');
                $req->session()->put('First_name', $$customer[0]->First_name);
                $req->session()->put('Picture', $$customer[0]->Picture);
                $req->session()->put('ID', $$customer[0]->ID);
                return redirect()->route('Admin.Dashboard');
            } else if ($$customer[0]->Status == 'Blocked') {
                $req->session()->flash('msg', 'Your account has blocked. Contact super admin for further assistance..!!');
                return redirect('/admin/login');
            } else {
                $req->session()->flash('msg', 'Invalid req ... at first logged in as an Customer !!');
                return redirect('/admin/login');
            }
        } elseif (count($seller) > 0) {
            if ($seller[0]->Status == 'Open') {
                $req->session()->put('Usertype', 'Seller');
                $req->session()->put('First_name', $seller[0]->First_name);
                $req->session()->put('Picture', $seller[0]->Picture);
                $req->session()->put('ID', $seller[0]->ID);
                return redirect()->route('Admin.Dashboard');
            } else if ($admin[0]->Status == 'Blocked') {
                $req->session()->flash('msg', 'Your account has blocked. Contact super admin for further assistance..!!');
                return redirect('/admin/login');
            } else {
                $req->session()->flash('msg', 'Invalid req ... at first logged in as an Admin !!');
                return redirect('/admin/login');
            }
        }
        else{
            $req->session()->flash('msg', 'Invalid username or password...!!!');
            return redirect('/admin/login');
        }
    }
}
