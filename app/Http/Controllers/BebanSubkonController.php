<?php

namespace App\Http\Controllers;

use App\Models\executing_cost_bebanSubkon;
use App\Models\Initiating_ProjectDefinition;
use App\Models\planning_procurement_bebanSubkon;
use Illuminate\Http\Request;

class BebanSubkonController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            $projectDefinition = Initiating_ProjectDefinition::all();
            return view('planning.procurement.procurement', compact('projectDefinition'));
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('planning.procurement.addBebanSubkon', compact('projectDefinition'));
    }

    public function store(Request $request)
    {
        planning_procurement_bebanSubkon::create([
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
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $bebansubkon = planning_procurement_bebanSubkon::find($id);
        $bebansubkon->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $bebansubkon = planning_procurement_bebanSubkon::find($id);
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('planning.procurement.editBebanSubkon', compact('bebansubkon','projectDefinition'));
    }

    public function update(Request $request, $id)
    {
        $bebansubkon= planning_procurement_bebanSubkon::find($id);
        $bebansubkon->update([
            'name_project' => $request->name_project,
            'procurement_subkon' => $request->procurement_subkon,
            'vendor_subkon' => $request->vendor_subkon,
            'description_service_subkon' => $request->description_service_subkon,
            'volume_subkon' => $request->volume_subkon,
            'units_subkon' => $request->units_subkon,
            'total_subkon' => $request->total_subkon,
            'start_toOrder_subkon' => $request->start_toOrder_subkon,
            'finish_toOrder_subkon' => $request->finish_toOrder,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }
}
