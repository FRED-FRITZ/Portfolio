<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;
use Illuminate\Support\Facades\Auth;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Check if user is not logged in or has no role
        if (empty(Auth::user()->role)) {
            abort(404);
        }

        $skills = Skills::orderBy('created_at', 'DESC')->get();

        return view('skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Check if user is not logged in or has no role
        if (empty(Auth::user()->role)) {
            abort(404);
        }

        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Check if user is not logged in or has no role
        if (empty(Auth::user()->role)) {
            abort(404);
        }

        Skills::create($request->all());

        return redirect()->route('skills.index')->with('success', 'Skills added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Check if user is not logged in or has no role
        if (empty(Auth::user()->role)) {
            abort(404);
        }

        $skills = Skills::findOrFail($id);

        return view('skills.show', compact('skills'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Check if user is not logged in or has no role
        if (empty(Auth::user()->role)) {
            abort(404);
        }

        $skills = Skills::findOrFail($id);

        return view('skills.edit', compact('skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Check if user is not logged in or has no role
        if (empty(Auth::user()->role)) {
            abort(404);
        }

        $skills = Skills::findOrFail($id);

        $skills->update($request->all());

        return redirect()->route('skills.index')->with('success', 'Skills updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Check if user is not logged in or has no role
        if (empty(Auth::user()->role)) {
            abort(404);
        }

        $skills = Skills::findOrFail($id);

        $skills->delete();

        return redirect()->route('skills.index')->with('success', 'Skills deleted successfully');
    }
}
