<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(Request $req){
        $req->session()->flush();
        return redirect('/admin/login');
    }
}
