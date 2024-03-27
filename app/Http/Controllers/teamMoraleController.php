<?php

namespace App\Http\Controllers;

use App\Models\planning_communication_teamMorale;
use App\Models\teamMorale;
use Illuminate\Http\Request;

class teamMoraleController extends Controller
{
    public function index()
    {
        $teamMorale = planning_communication_teamMorale::all();
        return view('planning.communication.index', compact('teamMorale'));
    }

    public function create()
    {
        return view('planning.communication.teamMorale');
    }

    public function store(Request $request)
    {
        planning_communication_teamMorale::create([
            'deliverable' => $request->deliverable,
            'description' => $request->description,
            'delivery_method' => $request->delivery_method,
            'frequency' => $request->frequency,
            'owner' => $request->owner,
            'audience' => $request->audience,
            $request->except(['_token']),
        ]);
        return redirect('/communication');
    }

    public function destroy($id)
    {
        $teamMorale = planning_communication_teamMorale::find($id);
        $teamMorale->delete();
        return redirect('/communication');
    }
    public function show($id)
    {
        $teamMorale = planning_communication_teamMorale::find($id);

        return view('planning.communication.editTeamMorale', compact('teamMorale'));
    }

    public function update(Request $request, $id)
    {

        $teamMorale = planning_communication_teamMorale::find($id);
        $teamMorale->update([
            'deliverable' => $request->deliverable,
            'description' => $request->description,
            'delivery_method' => $request->delivery_method,
            'frequency' => $request->frequency,
            'owner' => $request->owner,
            'audience' => $request->audience,
        ]);
        return redirect('/communication');
    }
}
