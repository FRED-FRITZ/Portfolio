<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
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

        $experiences = Experience::orderBy('created_at', 'DESC')->get();

        return view('experience.index', compact('experiences'));
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

        return view('experience.create');
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

        Experience::create($request->all());

        return redirect()->route('experiences.index')->with('success', 'Experience added successfully');
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

        $experiences = Experience::findOrFail($id);

        return view('experience.show', compact('experiences'));
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

        $experiences = Experience::findOrFail($id);

        return view('experience.edit', compact('experiences'));
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

        $experiences = Experience::findOrFail($id);

        $experiences->update($request->all());

        return redirect()->route('experiences.index')->with('success', 'Experience updated successfully');
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

        $experiences = Experience::findOrFail($id);

        $experiences->delete();

        return redirect()->route('experiences.index')->with('success', 'Experience deleted successfully');
    }
}
