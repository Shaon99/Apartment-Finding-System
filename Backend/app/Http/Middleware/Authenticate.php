<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Auth;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if($request->is('customer/*')) {
       if (!Auth::guard('customer')->check()){
                return route('customer.login');
        }
    }
    if($request->is('Seller/*')) {
        if (!Auth::guard('seller')->check()){
                 return route('seller.login');
         }
     }
     if($request->is('manager/*')) {
        if (!Auth::guard('manager')->check()){
                 return route('manager.login');
         }
     }
   
    }
}
