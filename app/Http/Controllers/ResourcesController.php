<?php

namespace App\Http\Controllers;

use App\Models\Initiating_ProjectDefinition;
use App\Models\planning_quality;
use App\Models\planning_resources;
use App\Models\Resources;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            $resources = planning_resources::all();
            $projectDefinition = Initiating_ProjectDefinition::all();
            return view('planning.resources.resources', compact('projectDefinition','resources'));
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create() 
    {
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('planning.resources.add', compact('projectDefinition')); 
    } 

    public function store(Request $request)
    {
        planning_resources::create([
            'name_project' => $request->name_project,
            'name' => $request->name,
            'duration' => $request->duration,
            'position' => $request->position,
            'status' => $request->status,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }    

    public function destroy($id){
        $resources = planning_resources::find($id);
        $resources->delete();
        return redirect('/planning');
    }
    public function show($id)
    {
        $resources = planning_resources::find($id);
        return view('planning.resources.edit');
    }

    public function update(Request $request, $id)
    {

        $resources = planning_resources::find($id);
        $resources->update([
            'name_project' => $request->name_project,
            'name' => $request->name,
            'duration' => $request->duration,
            'position' => $request->position,
            'status' => $request->status,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }
}
