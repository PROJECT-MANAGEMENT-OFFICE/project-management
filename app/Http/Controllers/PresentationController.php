<?php

namespace App\Http\Controllers;

use App\Models\planning_communication_presentation;
use App\Models\Presentation;
use Illuminate\Http\Request;

class PresentationController extends Controller
{
    public function index()
    {
        $presentation = planning_communication_presentation::all(); 
        return view('planning.communication.index', compact('presentation'));
    }


    public function create()
    {
        return view('planning.communication.presentation');
    } 

    public function store(Request $request)
    {
        planning_communication_presentation::create([
            'deliverable' => $request->deliverable,
            'description' => $request->description,
            'delivery_method' => $request->delivery_method,
            'frequency' => $request->frequency,
            'owner'=> $request->owner,
            'audience' => $request->audience,
            $request->except(['_token']),
        ]);
        return redirect ('/communication');
    }    

    public function destroy($id){
        $presentations = planning_communication_presentation::find($id);
        $presentations->delete();
        return redirect('/communication');
    }
    public function show($id)
    {
        $presentation = planning_communication_presentation::find($id);
        
        return view('planning.communication.editPresentation', compact('presentation'));
    }


    public function update(Request $request, $id)
    {

        $presentations = planning_communication_presentation::find($id);
        $presentations->update([
            'deliverable' => $request->deliverable,
            'description' => $request->description,
            'delivery_method' => $request->delivery_method,
            'frequency' => $request->frequency,
            'owner'=> $request->owner,
            'audience' => $request->audience,
        ]);
        return redirect ('/communication');
    }
}
