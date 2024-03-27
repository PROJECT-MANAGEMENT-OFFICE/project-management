<?php

namespace App\Http\Controllers;

use App\Models\planning_communication_presentation;
use App\Models\planning_communication_projectAnnouncement;
use App\Models\planning_communication_report;
use App\Models\Presentation;
use App\Models\projectAnouncement;
use App\Models\Reports;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        $reports = planning_communication_report::all();
        return view('planning.communication.index', compact('reports'));
    }

    public function create()
    {
        $reports = planning_communication_report::all();
        $presentation = planning_communication_presentation::all();
        $projectAnouncement = planning_communication_projectAnnouncement::all();
        return view('planning.communication.reports', compact('reports', 'presentation', 'projectAnouncement'));
    }

    public function store(Request $request)
    {
        planning_communication_report::create([
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
        $reports = planning_communication_report::find($id);
        $reports->delete();
        return redirect('/communication');
    }
    public function show($id)
    {
        $reports = planning_communication_report::find($id);

        return view('planning.communication.editReport', compact('reports'));
    }

    public function update(Request $request, $id)
    {

        $report = planning_communication_report::find($id);
        $report->update([
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
