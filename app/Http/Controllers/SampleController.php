<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SampleController extends Controller
{
    public function index()
    {
        $samples = Sample::all();
        return Inertia::render('Samples/Index', ['samples' => $samples]);
    }

    public function create()
    {
        return Inertia::render('Samples/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        Sample::create($request->all());

        return redirect()->route('samples.index')->with('success', 'Sample created successfully.');
    }

    public function show(Sample $sample)
    {
        //
    }

    public function edit(Sample $sample)
    {
        return Inertia::render('Samples/Edit', ['sample' => $sample]);
    }

    public function update(Request $request, Sample $sample)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $sample->update($request->all());

        return redirect()->route('samples.index')->with('success', 'Sample updated successfully.');
    }

    public function destroy(Sample $sample)
    {
        $sample->delete();

        return redirect()->route('samples.index')->with('success', 'Sample deleted successfully.');
    }
}
