<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    } 

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('username','password'))){
            return redirect('/dashboard');
    }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function logout(){

        Auth::logout();
        return view('login');

    }
}

