<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventOwnAccountDeletion
{
    public function handle(Request $request, Closure $next)
    {
        $users = Auth::users();

        // Check if the authenticated user is an admin and if they are trying to delete their own account
        if ($users && $users->Admin() && $request->users_id == $users->id) {
            abort(403, 'Admin cannot delete their own account.');
        }

        return $next($request);
    }
}
