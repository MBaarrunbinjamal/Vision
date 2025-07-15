<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            // ✅ Allow Admins
            if (Auth::user()->Role === 'Admin') {
                return $next($request);
            }

            // ✅ Normal user trying to access admin route
            return redirect('/'); // Send them to user homepage instead of 404
        }

        // ❌ Not logged in
        return redirect('/login');
    }
}
