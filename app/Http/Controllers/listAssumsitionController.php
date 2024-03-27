<?php

namespace App\Http\Controllers;

use App\Models\Initiating_ProjectDefinition;
use App\Models\planning_cost_listAssumsition;
use Illuminate\Http\Request;

class listAssumsitionController extends Controller
{
    public function index()
    {
        $projectDefinition = Initiating_ProjectDefinition::all();
        $listAssumsition = planning_cost_listAssumsition::all();
        return view('planning.cost.listAssumsition', compact('listAssumsition','projectDefinition'));
    }

 
    public function create()
    {
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('planning.cost.listAssumsition', compact('projectDefinition'));
    }

    public function store(Request $request)
    {
        planning_cost_listAssumsition::create([
            'name_project' => $request->name_project,
            'deskripsi' => $request->deskripsi,
            $request->except(['_token']),
        ]);
        return redirect('/cost');
    }

    public function destroy($id)
    {
        $listAssumsition = planning_cost_listAssumsition::find($id);
        $listAssumsition->delete();
        return redirect('/cost');
    }
    public function show($id)
    {
        $listAssumsition = planning_cost_listAssumsition::find($id);
        return view('planning.cost.listAssumsition', compact('listAssumsition'));
    }


    public function update(Request $request, $id)
    {

        $listAssumsition = planning_cost_listAssumsition::find($id);
        $listAssumsition->update([
            'name_project' => $request->name_project,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/cost ');
    }
}
