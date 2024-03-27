<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin'){
            $user = user::all();
            return view('user.index', compact('user'));
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        $user = user::all();
        return view('user.add', compact(['user']));
    }

    public function store(Request $request)
    {
        user::create([
            'id_user'=>$request->id_user,
            'name'=>$request->name,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'roles'=>$request->roles,
            $request->except(['_token']),
        ]);
        return redirect ('/user');
    }

    public function show($id)
    {
        $user = user::find($id);
        return view('user.edit',compact(['user']));
    }

    public function update(Request $request, $id)
    {
        $user= user::find($id);
        $user->update([
            'id_user'=>$request->id_user,
            'name'=>$request->name,
            'username'=>$request->username,
            'roles'=>$request->roles,
             $request->except(['_token']),
        ]);
        return redirect ('/user');
    }

    public function destroy($id)
    {
        $user = user::find($id);
        $user->delete();
        return redirect('/user');
    }
}
