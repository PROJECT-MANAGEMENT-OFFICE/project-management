<?php

namespace App\Http\Controllers;

use App\Models\planning_procurement_bebanBahan;
use Illuminate\Http\Request;

class BebanBahanCostController extends Controller
{
    /**
     */
    public function index()
    {
        $bebanBahan = planning_procurement_bebanBahan::all();
        return view('executing.costExecuting.BebanbahanCostExecuting', compact('bebanBahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view('executing.costExecuting.BebanbahanCostExecuting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     * 
     */
    public function store(Request $request)
    {
        planning_procurement_bebanBahan::create([
            'procurement' => $request->procurement,
            'vendor' => $request->vendor,
            'material' => $request->materialService,
            'description' => $request->description,
            'volume' => $request->volume,
            'unit' => $request->unit,
            'total' => $request->total,
        ]);
        return redirect('/cost');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $bebanBahan = planning_procurement_bebanBahan::find($id);

        return view('planning.cost.edit', compact('bebanBahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $bebanBahan = planning_procurement_bebanBahan::find($id);
        $bebanBahan->update([
            'procurement' => $request->procurement,
            'vendor' => $request->vendor,
            'material' => $request->materialService,
            'description' => $request->description,
            'volume' => $request->volume,
            'unit' => $request->unit,
            'total' => $request->total,
        ]);
        return redirect('/cost');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Request $request)
    {
        planning_procurement_bebanBahan::destroy($request->id);
        return redirect('/cost');
    }
}
