<?php

namespace App\Http\Controllers;

use App\Models\executing_cost_bebanBahan;
use App\Models\executing_procurement_bebanBahan;
use App\Models\Initiating_ProjectDefinition;
use App\Models\planning_procurement_bebanBahan;
use Illuminate\Http\Request;

class BebanBarangController extends Controller
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
        $bebanbarang = planning_procurement_bebanBahan::all();
        return view('planning.procurement.addBebanBahan', compact('projectDefinition','bebanbarang'));
    }

    public function store(Request $request)
    {
        planning_procurement_bebanBahan::create([
            'name_project' => $request->name_project,
            'procurement' => $request->procurement,
            'vendor' => $request->vendor,
            'description_service' => $request->description_service,
            'volume' => $request->volume,
            'units' => $request->units,
            'total' => $request->total,
            'start_toOrder' => $request->start_toOrder,
            'finish_toOrder' => $request->finish_toOrder,
            $request->except(['_token']),
        ]);

        executing_procurement_bebanBahan::create([
            'name_project' => $request->name_project,
            'procurement' => $request->procurement,
            'vendor' => $request->vendor,
            'description_service' => $request->description_service,
            'volume' => $request->volume,
            'units' => $request->units,
            'total' => $request->total,
            'start_toOrder' => $request->start_toOrder,
            'finish_toOrder' => $request->finish_toOrder,
            $request->except(['_token']),
        ]);
        return redirect('/planning')->with('success', 'Risk has been added successfully.');
    }
    

    public function destroy($id)
    {
        $bebanbarang = planning_procurement_bebanBahan::find($id);
        $bebanbarang->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $bebanbarang = planning_procurement_bebanBahan::find($id);
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('planning.procurement.editBebanbahan', compact('bebanbarang','projectDefinition'));
    }

    public function update(Request $request, $id)
    {
        $bebanbarang= planning_procurement_bebanBahan::find($id);
        $bebanbarang->update([
            'name_project' => $request->name_project,
            'procurement' => $request->procurement,
            'vendor' => $request->vendor,
            'description_service' => $request->description_service,
            'volume' => $request->volume,
            'units' => $request->units,
            'total' => $request->total,
            'start_toOrder' => $request->start_toOrder,
            'finish_toOrder' => $request->finish_toOrder,
            $request->except(['_token']),
        ]);
        return redirect ('/planning');
    }
}
