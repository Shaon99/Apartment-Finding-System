<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileUserController extends Controller
{
    public function profile(){
        return view('Frontend.profile.index');
    }
}
