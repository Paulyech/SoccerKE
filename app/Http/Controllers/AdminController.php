<?php

namespace App\Http\Controllers;

use App\Models\Tactic;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /*GET
    */
    public function dashboard(Request $request)
    {
        $tactics = Tactic::count();

        return view('admin.dashboard',['tactics'=>$tactics]);
    }

}
