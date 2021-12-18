<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        }else{
            $req->session()->flash('msg', 'Invalid username or password...!!!');
            return redirect('/admin/login');
        }
    }
}
