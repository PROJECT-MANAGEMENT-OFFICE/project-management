<?php

namespace App\Http\Controllers;

use App\Models\Initiating_ProjectDefinition;
use App\Models\planning_procurement_termOfPaymentPlan;
use App\Models\TermPlan;
use Illuminate\Http\Request;
use App\Models\ProjectDefinition;

class TermPlanController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            return view('planning.procurement.procurement');
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('planning.procurement.addTermPlan', compact(['projectDefinition']));
    }

    public function store(Request $request)
    {
        planning_procurement_termOfPaymentPlan::create([
            'term_type' => $request->term_type,
            'name_project' => $request->name_project,
            'value_term' => $request->value_term,
            'value_rp_term' => $request->value_rp_term,
            'month_plan' => $request->month_plan,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }


    public function destroy($id)
    {
        $termplan = planning_procurement_termOfPaymentPlan::find($id);
        $termplan->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $termplan = planning_procurement_termOfPaymentPlan::find($id);
        return view('planning.procurement.editTermPlan', compact('termplan'));
    }

    public function update(Request $request, $id)
    {
        $termplan = planning_procurement_termOfPaymentPlan::find($id);
        $termplan->update([
            'term_type' => $request->term_type,
            'name_project' => $request->name_project,
            'value_term' => $request->value_term,
            'value_rp_term' => $request->value_rp_term,
            'month_plan' => $request->month_plan,
            $request->except(['_token']),
        ]);
        return redirect('/planning');
    }
}
