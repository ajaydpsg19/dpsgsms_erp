<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function login(){

        return view('login');
       // return view('layout');

    }


    public function postLogin(Request $request)

    {
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
      
        return redirect("/")->withSuccess('Oppes! You have entered invalid credentials');

    }


    public function dashboard()
    {
        if(Auth::check()){
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
