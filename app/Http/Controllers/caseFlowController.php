<?php

namespace App\Http\Controllers;

use App\Models\Initiating_ProjectDefinition;
use App\Models\planning_cost_caseFlow;
use Illuminate\Http\Request;

class caseFlowController extends Controller
{
    public function index()
    {
        $projectDefinition = Initiating_ProjectDefinition::all();
        $caseflow = planning_cost_caseFlow::all();
        return view('planning.cost.caseFlow', compact('caseFlow','projectDefinition'));
    }
 

    public function create()
    {
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('planning.cost.caseFlow', compact('projectDefinition'));
    }

    public function store(Request $request)
    {
        planning_cost_caseFlow::create([
            'name_project' => $request->name_project,
            'waktu' => $request->waktu,
            'nilai_rupiah' => $request->nilai_rupiah,
            $request->except(['_token']),
        ]);
        return redirect('/costExecuting');
    }

    public function destroy($id)
    {
        $caseflow = planning_cost_caseFlow::find($id);
        $caseflow->delete();
        return redirect('/cost');
    }
    public function show($id)
    {
        $caseflow = planning_cost_caseFlow::find($id);

        return view('executing.projectIncomeStatementExecuting.editProjectIncome', compact('projectIncomeStatement'));
    }


    public function update(Request $request, $id)
    {

        $caseflow = planning_cost_caseFlow::find($id);
        $caseflow->update([
            'name_project' => $request->name_project,
            'waktu' => $request->waktu,
            'nilai_rupiah' => $request->nilai_rupiah,
            $request->except(['_token']),
        ]);
        return redirect('/costExecuting');
    }
}
