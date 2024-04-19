<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Educational;
use Illuminate\Support\Facades\Auth;

class EducationalController extends Controller
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

        $educationals = Educational::orderBy('created_at', 'DESC')->get();

        return view('educationals.index', compact('educationals'));
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

        return view('educationals.create');
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

        Educational::create($request->all());

        return redirect()->route('educationals.index')->with('success', 'Educational added successfully');
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

        $educationals = Educational::findOrFail($id);

        return view('educationals.show', compact('educationals'));
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

        $educationals = Educational::findOrFail($id);

        return view('educationals.edit', compact('educationals'));
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

        $educationals = Educational::findOrFail($id);

        $educationals->update($request->all());

        return redirect()->route('educationals.index')->with('success', 'Educational updated successfully');
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

        $educationals = Educational::findOrFail($id);

        $educationals->delete();

        return redirect()->route('educationals.index')->with('success', 'Educational deleted successfully');
    }
}
