<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExecutingController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin'){
            return view('executing.index');
        }elseif(Auth()->User()->roles == 'adminExecuting'){
            return view('executing.index');
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    } 
}
