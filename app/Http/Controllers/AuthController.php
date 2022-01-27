<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function registerPage()
    {
        return view('auth.register');
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function adminLoginPage()
    {
        return view('auth.admin');
    }

    public function register(request $request)
    {
        // validate inputs
        $request -> validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|min:6|max:15',
            'cpassword'=> 'required|same:password'
        ],[
            'cpassword.required' => 'The confirm password field is required.',
            'cpassword.same' => 'The confirm password and password field must match.',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->role = $request->role;
        $save = $user->save();

         if ($save) {
             return redirect('login')->with('success','You have registered successfully');
         }else {
            return back()->with('error',' registration Failed');

         }

    }


    public function login(Request $request)
    {
        // validate inputs
        $request -> validate([
            'email'=> 'required|email|exists:users,email',
            'password'=> 'required|min:6|max:15'
            
        ],
        [
            'email.exists'=>'Invalid email address'
        ]);

        $email = $request->email;
        $password = $request->password;

        $userDetails = User::where('email', $email)->get()->first();


        if (!Hash::check($password, $userDetails->password)) {

            return back()->with('fail','Incorrect credentials. Please try again.');
            
        }else {

            $request->session()->put('userDetails',$userDetails);
            return view('home');

        }

    }

     /**  Authenticate Admin Credentials */
     public function admin(Request $request)
     {
        $email = $request->email;
        $password = $request->password;
 
        $userDetails = Admin::where('email', $email)->get()->first();
 
        try{
 
            if ($userDetails == null) {
 
                Alert::error('Oops', 'Invalid Email Address. Please try again.')->persistent(true,false);
                return back();
 
            }else{

                if ($password != $userDetails->password) {
 
                    Alert::error('Oops', 'Invalid Password. Please try again.')->persistent(true,false);
                    return back();
                    
                }else {
 
                    $request->session()->put('userDetails',$userDetails);
                    return redirect('dashboard');

                }
                 
            }
             
         } catch(\Illuminate\Database\QueryException $e){
 
            /*Catch errors */
            Alert::error('Oops', $e->errorInfo[2])->persistent(true,false);
            return back();
                
         }
 
    }

    /** Logout user */
    public function logout(Request $request)
    {
        
        $request->session()->flush();
        return redirect('login');

    }

}
