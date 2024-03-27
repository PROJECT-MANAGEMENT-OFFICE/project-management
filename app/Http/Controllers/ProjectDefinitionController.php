<?php

namespace App\Http\Controllers;

use App\Models\Initiating_ProjectDefinition;
use Illuminate\Http\Request;

class ProjectDefinitionController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin') {
            $projectDefinition = Initiating_ProjectDefinition::all();
            return view('initiating.projectDefinition.projectDefinition', compact(['projectDefinition']));
        } elseif (Auth()->User()->roles == 'adminInitiating') {
            $projectDefinition = Initiating_ProjectDefinition::all();
            return view('initiating.projectDefinition.projectDefinition', compact(['projectDefinition']));
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('initiating.projectDefinition.projectDefinition', compact(['projectDefinition']));
    }

    public function store(Request $request)
    {
        Initiating_ProjectDefinition::create([
            'name_project' => $request->name_project,
            'code_project' => $request->code_project,
            'contract_value' => $request->contract_value,
            'bussines_line' => $request->bussines_line,
            'date' => $request->date,
            'status' => $request->status,
            'source_ofFunds' => $request->source_ofFunds,
            'schema_bussines' => $request->schema_bussines,
            'contract_duration' => $request->contract_duration,
            'warranty_period' => $request->warranty_period,
            $request->except(['_token']),
        ]);
        return redirect('/initiating');
    }

    public function destroy($id)
    {
        $projectDefinition = Initiating_ProjectDefinition::find($id);
        $projectDefinition->delete();
        return redirect('/initiating');
    }

    public function show($id)
    {
        return view('initiating.projectDefinition.edit');
    }

    public function update(Request $request, $id)
    {
        $projectDefinition = Initiating_ProjectDefinition::find($id);
        $projectDefinition->update([
            'name_project' => $request->name_project,
            'code_project' => $request->code_project,
            'contract_value' => $request->contract_value,
            'bussines_line' => $request->bussines_line,
            'date' => $request->date,
            'status' => $request->status,
            'source_ofFunds' => $request->source_ofFunds,
            'schema_bussines' => $request->schema_bussines,
            'contract_duration' => $request->contract_duration,
            'warranty_period' => $request->warranty_period,
            $request->except(['_token']),
        ]);
        return redirect('/initiating');
    }
}
