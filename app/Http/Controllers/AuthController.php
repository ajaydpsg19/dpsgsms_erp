<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(){

        return view('login');
       // return view('layout');

    }


    public function postLogin(Request $request)
    {
       
        $request->validate([
            'emp_id' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = [
            'emp_id' => $request->emp_id,
            'password' => $request->password,
        ];
    
       
        if (Auth::attempt($credentials)) {

       

            return redirect()->intended('dashboard')
                        ->withSuccess('You have successfully logged in');
        }
    
        return redirect("/")->withErrors('Oops! You have entered invalid credentials');
    }
    

    public function dashboard()
    {
        if(Auth::check()){
        $emp_id = Auth::user()->emp_id;
        $userData = User::with('persionalData','officialData')->where('emp_id',$emp_id)->first();
        
        session(['emp_id' => $userData->emp_id]);
        session(['name' => $userData->persionalData->first_name]);
        
            return view('dashboard');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');

    }


    // public function logout() {
    //     Session::flush();
    //     Auth::logout();
    //     return Redirect('login');
    // }
}
