<?php

namespace App\Http\Controllers;

use App\Models\BebanBarang;
use App\Models\BebanSubkon;
use App\Models\Guarantee;
use App\Models\Initiating_ProjectDefinition;
use App\Models\planning_procurement_bebanBahan;
use App\Models\planning_procurement_bebanSubkon;
use App\Models\planning_procurement_costContractToValue;
use App\Models\planning_procurement_guarantee;
use App\Models\planning_procurement_termOfPaymentPlan;
use App\Models\planning_quality;
use App\Models\planning_risk;
use App\Models\planning_scope;
use App\Models\planning_stakeholder;
use App\Models\Procurement;
use App\Models\Stakeholder;
use App\Models\TermPlan;
use Illuminate\Http\Request;
use App\Models\Risk;
use App\Models\quality;

class PlanningController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin' || Auth()->User()->roles == 'adminPlanning') {
            $risks = planning_risk::all();
            $scope = planning_scope::all();
            $stakeholder = planning_stakeholder::all();
            $quality = planning_quality::all();
            $procurement = planning_procurement_costContractToValue::all();
            $bebanbarang = planning_procurement_bebanBahan::all();
            $bebansubkon = planning_procurement_bebanSubkon::all();
            $termPlan = planning_procurement_termOfPaymentPlan::all();
            $quality = planning_quality::all();
            $guarantee = planning_procurement_guarantee::all();
            $projectDefinition = Initiating_ProjectDefinition::all();
            return view('planning.index', compact('risks', 'scope', 'stakeholder', 'quality', 'procurement', 'bebanbarang', 'bebansubkon', 'termPlan', 'quality', 'guarantee','projectDefinition'));
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function filterPlanning(Request $request)
    {
        $risks = planning_risk::latest()->filter($request->all())->get();
        $scope = planning_scope::latest()->filter($request->all())->get();
        $stakeholder = planning_stakeholder::latest()->filter($request->all())->get();
        $quality = planning_quality::latest()->filter($request->all())->get();
        $procurement = planning_procurement_costContractToValue::latest()->filter($request->all())->get();
        $bebanbarang = planning_procurement_bebanBahan::latest()->filter($request->all())->get();
        $bebansubkon = planning_procurement_bebanSubkon::latest()->filter($request->all())->get();
        $termPlan = planning_procurement_termOfPaymentPlan::latest()->filter($request->all())->get();
        $guarantee = planning_procurement_guarantee::latest()->filter($request->all())->get();
        $projectDefinition = Initiating_ProjectDefinition::latest()->filter($request->all())->get();
        return view('planning.index')->with([
            'projectDefinition' => $projectDefinition,
            'risks'=> $risks,
            'stakeholder'=> $stakeholder,
            'quality'=> $quality,
            'procurement'=> $procurement,
            'bebanbarang'=> $bebanbarang,
            'bebansubkon'=> $bebansubkon,
            'termPlan'=> $termPlan,
            'guarantee'=> $guarantee,
            'scope'=> $scope,

        ]);
    }
}
