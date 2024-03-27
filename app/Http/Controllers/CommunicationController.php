<?php

namespace App\Http\Controllers;

use App\Models\planning_communication_presentation;
use App\Models\planning_communication_projectAnnouncement;
use App\Models\planning_communication_report;
use App\Models\planning_communication_reviewAndMeeting;
use App\Models\planning_communication_teamMorale;
use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    public function index()
    {
        $reports = planning_communication_report::all();
        $presentation = planning_communication_presentation::all();
        $projectAnouncement = planning_communication_projectAnnouncement::all();
        $reviewMeeting = planning_communication_reviewAndMeeting::all();
        $teamMorale = planning_communication_teamMorale::all();
        return view('planning.communication.index', compact('reports', 'presentation', 'projectAnouncement', 'reviewMeeting', 'teamMorale'));
    }
}
