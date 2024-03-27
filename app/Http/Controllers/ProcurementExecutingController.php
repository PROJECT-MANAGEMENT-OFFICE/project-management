<?php

namespace App\Http\Controllers;

use App\Models\executing_cost_bebanBahan;
use App\Models\executing_cost_bebanSubkon;
use App\Models\executing_procurement_bebanBahan;
use App\Models\executing_procurement_bebanSubkon;
use App\Models\Initiating_ProjectDefinition;
use App\Models\ProcurementExecuting;
use App\Models\TagihanExecuting;
use Illuminate\Http\Request;

class ProcurementExecutingController extends Controller
{
    public function index()
    {
        if (Auth()->user()->roles == 'superadmin' || Auth()->user()->roles == 'adminExecuting') {
            $bebanbahanExecuting = executing_procurement_bebanBahan::latest()->filter(request(['search']))->get();
            $bebansubkonExecuting = executing_procurement_bebanSubkon::all();
            $projectDefinition = Initiating_ProjectDefinition::all();
            $tagihanExecuting = TagihanExecuting::all();
            return view('executing.procurementExecuting.procurementExecuting')->with([
                'bebanbahanExecuting' => $bebanbahanExecuting,
                'bebansubkonExecuting' => $bebansubkonExecuting,
                'projectDefinition' => $projectDefinition,
                'tagihanExecuting' => $tagihanExecuting,
            ]);
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function create()
    {
        return view('executing.procurement.procurementExecuting');
    }

    public function store(Request $request)
    {
        ProcurementExecuting::create([
            'value' => $request->value,
            'contract_value' => $request->contract_value,
            $request->except(['_token']),
        ]);
        return redirect('/planning');
    }


    public function destroy($id)
    {
        $procurementExecuting = ProcurementExecuting::find($id);
        $procurementExecuting->delete();
        return redirect('/planning');
    }

    public function show($id)
    {
        $procurementExecuting = ProcurementExecuting::find($id);
        return view('executing.procurement.EditbebansubkonExecuting', compact('procurementExecuting'));
    }

    public function update(Request $request, $id)
    {
        $procurementExecuting = ProcurementExecuting::find($id);
        $procurementExecuting->update([
            'value' => $request->value,
            'contract_value' => $request->contract_value,
            $request->except(['_token']),
        ]);
        return redirect('/planning');
    }

    public function filter(Request $request)
    {
        $bebanbahanExecuting = executing_cost_bebanBahan::latest()->filter($request->all())->get();
        $bebansubkonExecuting = executing_cost_bebanSubkon::all();
        $projectDefinition = Initiating_ProjectDefinition::all();
        return view('executing.procurementExecuting.procurementExecuting')->with([
            'bebanbahanExecuting' => $bebanbahanExecuting,
            'bebansubkonExecuting' => $bebansubkonExecuting,
            'projectDefinition' => $projectDefinition,
        ]);
    }
}
