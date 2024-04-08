<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skills::orderBy('created_at', 'DESC')->get();

        return view('skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Skills::create($request->all());

        return redirect()->route('skills.index')->with('success', 'Skills added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $skills = Skills::findOrFail($id);

        return view('skills.show', compact('skills'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skills = Skills::findOrFail($id);

        return view('skills.edit', compact('skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skills = Skills::findOrFail($id);

        $skills->update($request->all());

        return redirect()->route('skills.index')->with('success', 'Skills updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skills = Skills::findOrFail($id);

        $skills->delete();

        return redirect()->route('skills.index')->with('success', 'Skills deleted successfully');
    }
}
