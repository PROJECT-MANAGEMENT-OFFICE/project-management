<?php

namespace App\Http\Controllers;

use App\Models\Initiating_ProjectDefinition;
use App\Models\planning_quality;

use App\Models\quality;
use Illuminate\Http\Request;

class QualityController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            $quality = planning_quality::all();
            $projectDefinition = Initiating_ProjectDefinition::all();
            return view('planning.quality.quality', compact('projectDefinition','quality'));
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        $quality = planning_quality::all();
        $projectDefinition = Initiating_ProjectDefinition::all();   
        return view('planning.quality.add', compact('projectDefinition','quality'));
    }

    public function store(Request $request)
    {
        planning_quality::create([
            'name_project' => $request->name_project,
            'requirements' => $request->requirements,
            'category' => $request->category,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $quality = planning_quality::find($id);
        $quality->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $quality = planning_quality::find($id);
        return view('planning.quality.edit', compact('quality'));
    }

    public function update(Request $request, $id)
    {
        $quality= planning_quality::find($id);
        $quality->update([
            'name_project' => $request->name_project,
            'requirements' => $request->requirements,
            'category' => $request->category,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }
}
