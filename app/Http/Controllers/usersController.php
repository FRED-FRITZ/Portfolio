<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->get();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin = new User();

        $admin->role = $request->input('role');
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->avatar = $request->input('avatar');
        $admin->password = bcrypt($request->input('password'));

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $admin->avatar = $avatarPath;
        }

        $admin->save();

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::findOrFail($id);

        return view('users.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::findOrFail($id);

        return view('users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::findOrFail($id);

        $users->role = $request->input('role');
        $users->name = $request->input('name');
        $users->email = $request->input('email');

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $users->avatar = $avatarPath;
        }

        $users->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);

        $users->delete();

        return redirect()->route('users.index')->with('success', 'Users deleted successfully');
    }
}
