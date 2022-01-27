<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class isAdmin
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
        $userDetails = $request->session()->get('userDetails');

        if($userDetails->role == 'admin'){

            return $next($request);
            
        }

        Alert::error('Oops', 'Access Denied. You must be logged as an admin to access this resource!')->persistent(true,false);
        return back();

    }
}
