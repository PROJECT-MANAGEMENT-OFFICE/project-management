<?php

namespace App\Http\Controllers;

use App\Models\planning_communication_projectAnnouncement;
use Illuminate\Http\Request;

class projectAnouncementController extends Controller
{
    public function index()
    {
        $projectAnouncement = planning_communication_projectAnnouncement::all(); 
        return view('planning.communication.index', compact('projectAnouncement'));
    }

    public function create() 
    {
        return view('planning.communication.projectAnouncement');
    } 

    public function store(Request $request)
    {
        planning_communication_projectAnnouncement::create([
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
        $projectAnouncement = planning_communication_projectAnnouncement::find($id);
        $projectAnouncement->delete();
        return redirect('/communication');
    }
    public function show($id)
    {
        $projectAnouncement = planning_communication_projectAnnouncement::find($id);
        
        return view('planning.communication.editProjectAnouncement', compact('projectAnouncement'));
    }

    public function update(Request $request, $id)
    {

        $projectAnouncement = planning_communication_projectAnnouncement::find($id);
        $projectAnouncement->update([
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
