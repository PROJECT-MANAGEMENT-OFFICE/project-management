<?php

namespace App\Http\Controllers;

use App\Models\executing_cost_termOfPaymentPlan;
use App\Models\planning_cost_projectIncomeStatement;
use App\Models\planning_procurement_bebanBahan;
use Illuminate\Http\Request;
use App\Models\CostExecuting;
use App\Models\ProjectIncomeStatement;


class CostExecutingController extends Controller
{
    public function index()
    {
        $costExecuting = execu::all();
        $projectIncomeStatement = planning_cost_projectIncomeStatement::all();
        $TermOfPayment = executing_cost_termOfPaymentPlan::all();
        $bebanBahanCost = planning_procurement_bebanBahan::all();
        return view('executing.costExecuting.indexCost', compact('costExecuting','projectIncomeStatement','TermOfPayment','bebanBahanCost'));
    }


    public function create()
    {
        return view('executing.costExecuting.addCost');
    }

    public function store(Request $request)
    {
        CostExecuting::create([
            'object' => $request->object,
            'budget' => $request->budget,
            'assigned' => $request->assigned,
            'available' => $request->available,
            'dateUpdate' => $request->dateUpdate,
            $request->except(['_token']),
        ]);
        return redirect('/costExecuting');
    }

    public function destroy($id)
    {
        $costExecuting = CostExecuting::find($id);
        $costExecuting->delete();
        return redirect('/costExecuting');
    }
    public function show($id)
    {
        $costExecuting = CostExecuting::find($id);

        return view('executing.costExecuting.editCost', compact('costExecuting'));
    }


    public function update(Request $request, $id)
    {

        $costExecutings = CostExecuting::find($id);
        $costExecutings->update([
            'object' => $request->object,
            'budget' => $request->budget,
            'assigned' => $request->assigned,
            'available' => $request->available,
            'dateUpdate' => $request->dateUpdate,
        ]);
        return redirect('/costExecuting');
    }
}
