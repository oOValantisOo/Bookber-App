<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if user is logged in
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirect unauthenticated users
        }

        // Check the user role
        $user = Auth::user();
        if ($user->role !== $role) { 
            return abort(403, 'Unauthorized Access'); // Forbidden access
        }

        return $next($request);
    }
}
