<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = Work::orderBy('created_at', 'DESC')->get();

        return view('works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('works.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Work::create($request->all());

        return redirect()->route('works.index')->with('success', 'Works added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $works = Work::findOrFail($id);

        return view('works.show', compact('works'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $works = Work::findOrFail($id);

        return view('works.edit', compact('works'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $works = Work::findOrFail($id);

        $works->update($request->all());

        return redirect()->route('works.index')->with('success', 'Works updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $works = Work::findOrFail($id);

        $works->delete();

        return redirect()->route('works.index')->with('success', 'Works deleted successfully');
    }
}
