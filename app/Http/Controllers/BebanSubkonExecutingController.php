<?php

namespace App\Http\Controllers;

use App\Models\executing_cost_bebanSubkon;
use App\Models\Initiating_ProjectDefinition;
use Illuminate\Http\Request;

class BebanSubkonExecutingController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            $projectDefinition = Initiating_ProjectDefinition::all();
            return view('executing.procurementExecuting.procurementExecuting', compact('projectDefinition'));
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('executing.procurementExecuting.AddbebansubkonExecuting', compact('projectDefinition'));
    }

    public function store(Request $request)
    {
        executing_cost_bebanSubkon::create([
            'name_project' => $request->name_project,
            'procurement_subkon' => $request->procurement_subkon,
            'vendor_subkon' => $request->vendor_subkon,
            'description_service_subkon' => $request->description_service_subkon,
            'volume_subkon' => $request->volume_subkon,
            'units_subkon' => $request->units_subkon,
            'total_subkon' => $request->total_subkon,
            'start_toOrder_subkon' => $request->start_toOrder_subkon,
            'finish_toOrder_subkon' => $request->finish_toOrder_subkon,
            $request->except(['_token']),
        ]);
        return redirect('/procurementExecuting');
    }
    

    public function destroy($id)
    {
        $bebansubkonExecuting = executing_cost_bebanSubkon::find($id);
        $bebansubkonExecuting->delete();
        return redirect('/procurementExecuting');
    }

    public function show($id)
    {
        $bebansubkonExecuting = executing_cost_bebanSubkon::find($id);
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('executing.procurementExecuting.EditbebansubkonExecuting', compact('bebansubkonExecuting','projectDefinition'));
    }

    public function update(Request $request, $id)
    {
        $bebansubkonExecuting= executing_cost_bebanSubkon::find($id);
        $bebansubkonExecuting->update([
            'name_project' => $request->name_project,
            'procurement_subkon' => $request->procurement_subkon,
            'vendor_subkon' => $request->vendor_subkon,
            'description_service_subkon' => $request->description_service_subkon,
            'volume_subkon' => $request->volume_subkon,
            'units_subkon' => $request->units_subkon,
            'total_subkon' => $request->total_subkon,
            'start_toOrder_subkon' => $request->start_toOrder_subkon,
            'finish_toOrder_subkon' => $request->finish_toOrder_subkon,
            $request->except(['_token']),
        ]);
        return redirect ('/procurementExecuting');
    }
}
