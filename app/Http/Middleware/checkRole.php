<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation;

class checkRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!$request->user()) {
            return redirect()->route('login');
        }

        // Check if the user has the required role
        if (!$request->user()->hasRole($role)) {
            abort(403, 'Unauthorized: You are not authorized to access this resource.');
        }

        return $next($request);
    }
}
