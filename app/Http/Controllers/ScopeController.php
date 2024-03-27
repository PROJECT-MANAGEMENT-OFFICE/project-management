<?php

namespace App\Http\Controllers;

use App\Models\Initiating_ProjectDefinition;
use App\Models\planning_scope;
use App\Models\scope;
use Illuminate\Http\Request;

class ScopeController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            $projectDefinition = Initiating_ProjectDefinition::all();
            $scope = planning_scope::all();
            return view('planning.scope.scope', compact('projectDefinition','scope'));
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('planning.scope.add', compact('projectDefinition'));
    }

    public function store(Request $request)
    {
        planning_scope::create([
            'name_project' => $request->name_project,
            'technical_requirements' => $request->technical_requirements,
            'perfomance_requirements' => $request->perfomance_requirements,
            'bussines_requirements' => $request->bussines_requirements,
            'regulatory_requirements' => $request->regulatory_requirements,
            'user_requirements' => $request->user_requirements,
            'system_requirements' => $request->system_requirements,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $scope = planning_scope::find($id);
        $scope->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $scope = planning_scope::find($id);
        return view('planning.scope.edit', compact('scope'));
    }

    public function update(Request $request, $id)
    {
        $scope= planning_scope::find($id);
        $scope->update([
            'name_project' => $request->name_project,
            'technical_requirements' => $request->technical_requirements,
            'perfomance_requirements' => $request->perfomance_requirements,
            'bussines_requirements' => $request->bussines_requirements,
            'regulatory_requirements' => $request->regulatory_requirements,
            'user_requirements' => $request->user_requirements,
            'system_requirements' => $request->system_requirements,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }

}
