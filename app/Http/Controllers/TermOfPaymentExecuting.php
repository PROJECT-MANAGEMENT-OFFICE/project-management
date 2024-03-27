<?php

namespace App\Http\Controllers;

use App\Models\executing_cost_termOfPaymentPlan;
use App\Models\Initiating_ProjectDefinition;
use Illuminate\Http\Request;
use App\Models\TermOfPaymentPlanExecuting;

class TermOfPaymentExecuting extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            $projectDefinition = Initiating_ProjectDefinition::all();
            return view('planning.procurement.procurement', compact('projectDefinition'));
        } else {
            return redirect('/costExecuting')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('executing.TermOfPaymentExecuting.addTerm', compact('projectDefinition'));
    }

    public function store(Request $request)
    {
        executing_cost_termOfPaymentPlan::create([
            'name_project' => $request->name_project,
            'term_type' => $request->term_type,
            'value_term' => $request->value_term,
            'value_rp_term' => $request->value_rp_term,
            'month_plan' => $request->month_plan,
            'guarantee' => $request->guarantee,
            $request->except(['_token']),
        ]);
        return redirect('/costExecuting')->with('success', 'Risk has been added successfully.');
    }


    public function destroy($id)
    {
        $TermOfPayment = executing_cost_termOfPaymentPlan::find($id);
        $TermOfPayment->delete();
        return redirect('/costExecuting');
    }

    public function show($id)
    {
        $TermOfPayment = executing_cost_termOfPaymentPlan::find($id);
        return view('executing.TermOfPaymentExecuting.editTerm', compact('TermOfPayment'));
    }

    public function update(Request $request, $id)
    {
        $TermOfPayment = executing_cost_termOfPaymentPlan::find($id);
        $TermOfPayment->update([
            'name_project' => $request->name_project,
            'term_type' => $request->term_type,
            'value_term' => $request->value_term,
            'value_rp_term' => $request->value_rp_term,
            'month_plan' => $request->month_plan,
            'guarantee' => $request->guarantee,
            $request->except(['_token']),
        ]);
        return redirect('/costExecuting');
    }
}
