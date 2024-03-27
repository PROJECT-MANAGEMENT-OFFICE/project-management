<?php

namespace App\Http\Controllers;

use App\Models\planning_cost_caseFlow;
use App\Models\planning_cost_listAssumsition;
use App\Models\planning_cost_projectIncomeStatement;
use App\Models\planning_procurement_bebanBahan;
use Illuminate\Http\Request;

class CostController extends Controller
{
    public function index()
    {
        $caseflow = planning_cost_caseFlow::all();
        $bebanBahan = planning_procurement_bebanBahan::all();
        $projectIncomeStatement = planning_cost_projectIncomeStatement::all();
        $listAssumsition = planning_cost_listAssumsition::all();
        return view('planning.cost.index', compact('bebanBahan', 'projectIncomeStatement','caseflow','listAssumsition'));
    }
}
