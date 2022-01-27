<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class isLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('userDetails')){
            return $next($request);
        }

        Alert::error('Oops', 'Access Denied. You must be logged in to access this resource!')->persistent(true,false);
        return redirect('login');
    }
}
