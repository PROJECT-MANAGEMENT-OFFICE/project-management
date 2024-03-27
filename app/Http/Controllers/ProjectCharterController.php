<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectCharterController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin'){
            return view('initiating.projectCharter');
        }elseif(Auth()->User()->roles == 'adminInitiating'){
            return view('initiating.projectCharter');
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    } 
}
