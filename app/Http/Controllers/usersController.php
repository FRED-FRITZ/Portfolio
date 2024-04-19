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
            $avatarPath = $request->file('avatar')->store('avatar', 'public');
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
    $user = User::findOrFail($id);

    $user->role = $request->input('role');
    $user->name = $request->input('name');
    $user->email = $request->input('email');

    // Check if a new avatar file is uploaded
    if ($request->hasFile('avatar')) {
        // Delete the old avatar if it exists
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        // Store the new avatar file
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
        $user->avatar = $avatarPath;
    }

    $user->save();

    return redirect()->route('users.index')->with('success', 'User updated successfully');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);

        if ($users->role == "admin") {
            return redirect()->route('users.index')->with('error', 'ADMIN USER CANNOT BE DELETED!!');
        }

        $users->delete();

        return redirect()->route('users.index')->with('success', 'Users deleted successfully');
    }
}
