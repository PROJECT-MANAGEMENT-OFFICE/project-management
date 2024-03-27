<?php

namespace App\Http\Controllers;

use App\Models\Initiating_ProjectDefinition;
use App\Models\planning_procurement_guarantee;
use Illuminate\Http\Request;

class GuaranteeController extends Controller
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
        return view('planning.procurement.addGuarantee', compact(['projectDefinition']));
    }

    public function store(Request $request)
    {
        planning_procurement_guarantee::create([
            'name_project' => $request->name_project,
            'deskripsi' => $request->deskripsi,
            'persen' => $request->persen,
            'radio' => $request->radio,

            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }


    public function destroy($id)
    {
        $guarantee = planning_procurement_guarantee::find($id);
        $guarantee->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $guarantee = planning_procurement_guarantee::find($id);
        return view('planning.procurement.editGuarantee', compact('guarantee'));
    }

    public function update(Request $request, $id)
    {
        $guarantee = planning_procurement_guarantee::find($id);
        $guarantee->update([
            'name_project' => $request->name_project,
            'deskripsi' => $request->deskripsi,
            'persen' => $request->persen,
            'radio' => $request->radio,

            $request->except(['_token']),
        ]);
        return redirect('/planning');
    }
}
