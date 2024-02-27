<?php

namespace App\Http\Controllers;

use App\Models\Risk;
use Illuminate\Http\Request;

class RiskController extends Controller
{
    public function index()
    {

        $risks = Risk::all();
        return view('risks.index', compact('risks'));
    }

    public function create()
    {
        return view('risks.create');
    }

    public function store(Request $request)
    {
      
        Risk::create($request->all());
        return redirect()->route('risks.index')->with('success', 'Risk created successfully!');
    }

    public function show(Risk $risk)
    {
        return view('risks.show', compact('risk'));
    }

    public function edit(Risk $risk)
    {
        return view('risks.edit', compact('risk'));
    }

    public function update(Request $request, Risk $risk)
    {
        $risk->update($request->all());
        return redirect()->route('risks.index')->with('success', 'Risk updated successfully!');
    }

    public function destroy(Risk $risk)
    {
        $risk->delete();
        return redirect()->route('risks.index')->with('success', 'Risk deleted successfully!');
    }
    
}
