<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            abort(403, 'User is not logged in.');
        }

        $user = Auth::user();

        // Debugging output
        if (!$user->is_admin) {
            abort(403, 'User is not an admin. is_admin=' . $user->is_admin . ', role=' . $user->role);
        }

        return $next($request);
    }
}
