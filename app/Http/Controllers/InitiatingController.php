<?php

namespace App\Http\Controllers;

use App\Models\Initiating_ProjectDefinition;
use Illuminate\Http\Request;
class InitiatingController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin'){
            $projectDefinition = Initiating_ProjectDefinition::all();
             return view('initiating.index',compact(['projectDefinition']));
        }elseif(Auth()->User()->roles == 'adminInitiating'){
            $projectDefinition = Initiating_ProjectDefinition::all();
             return view('initiating.index',compact(['projectDefinition']));
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    } 
}
