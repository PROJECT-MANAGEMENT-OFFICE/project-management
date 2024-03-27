<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClosingController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin'){
            return view('control.costMonitoring.index');
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    } 
}
