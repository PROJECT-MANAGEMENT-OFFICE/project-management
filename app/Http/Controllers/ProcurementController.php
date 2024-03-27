<?php

namespace App\Http\Controllers;

use App\Models\Initiating_ProjectDefinition;
use App\Models\planning_procurement_bebanBahan;
use App\Models\planning_procurement_bebanSubkon;
use App\Models\planning_procurement_costContractToValue;
use App\Models\planning_procurement_guarantee;
use App\Models\planning_procurement_termOfPaymentPlan;
use App\Models\planning_quality;
use App\Models\Procurement;
use Illuminate\Http\Request;
use App\Models\ProjectDefinition;

class ProcurementController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            $bebanbarang = planning_procurement_bebanBahan::all();
            $bebansubkon = planning_procurement_bebanSubkon::all();
            $termPlan = planning_procurement_termOfPaymentPlan::all();
            $quality = planning_quality::all();
            $guarantee = planning_procurement_guarantee::all();
            $projectDefinition = Initiating_ProjectDefinition::all();
            $procurement = planning_procurement_costContractToValue::all();
            return view('planning.procurement.procurement', compact(['projectDefinition','procurement','bebanbarang', 'bebansubkon', 'termPlan', 'quality', 'guarantee']));
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        $projectDefinition = Initiating_ProjectDefinition::all();
        $procurement = planning_procurement_costContractToValue::all();
        return view('planning.procurement.addCostContract', compact(['projectDefinition','procurement']));
    }

    public function store(Request $request)
    {
        planning_procurement_costContractToValue::create([
            'name_project'=> $request->name_project,
            'value' => $request->value,
            'contract_value' => $request->contract_value,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }


    public function destroy($id)
    {
        $procurement = planning_procurement_costContractToValue::find($id);
        $procurement->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $procurement = planning_procurement_costContractToValue::find($id);
        return view('planning.procurement.editCostContract', compact('procurement'));
    }

    public function update(Request $request, $id)
    {
        $procurement = planning_procurement_costContractToValue::find($id);
        $procurement->update([
            'name_project' => $request->name_project,
            'value' => $request->value,
            'contract_value' => $request->contract_value,
            $request->except(['_token']),
        ]);
        return redirect('/planning');
    }
}
