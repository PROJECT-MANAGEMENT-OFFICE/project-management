<?php

namespace App\Http\Controllers;

use App\Models\executing_cost_bebanBahan;
use App\Models\Initiating_ProjectDefinition;
use Illuminate\Http\Request;

class BebanBahanExecutingController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminPlanning') {
            $bebanbahanExecuting = executing_cost_bebanBahan::all();
            $projectDefinition = Initiating_ProjectDefinition::all();
            return view('executing.procurementExecuting.add', compact('bebanbahanExecuting','projectDefinition'));
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        $bebanbahanExecuting = executing_cost_bebanBahan::all();
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('executing.procurementExecuting.AddbebanbahanExecuting', compact('bebanbahanExecuting','projectDefinition'));
    }

    public function store(Request $request)
    {
        executing_cost_bebanBahan::create([
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
        return redirect('/procurementExecuting');
    }
    

    public function destroy($id)
    {
        $bebanbahanExecuting = executing_cost_bebanBahan::find($id);
        $bebanbahanExecuting->delete();
        return redirect('/procurementExecuting');
    }

    public function show($id)
    {
        $bebanbahanExecuting = executing_cost_bebanBahan::find($id);
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('executing.procurementExecuting.EditbebanbahanExecuting', compact('bebanbahanExecuting','projectDefinition'));
    }

    public function update(Request $request, $id)
    {
        $bebanbahanExecuting = executing_cost_bebanBahan::find($id);
        $bebanbahanExecuting->update([
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
        return redirect ('/procurementExecuting');
    }
}
