<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
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

        $contacts = Contact::orderBy('created_at', 'DESC')->get();

        return view('contacts.index', compact('contacts'));
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

        // You may add logic for showing the create form here
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

        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact added successfully');
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

        // You may add logic for showing a single contact here
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

        // You may add logic for showing the edit form here
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

        // You may add logic for updating a contact here
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

        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully');
    }
}
