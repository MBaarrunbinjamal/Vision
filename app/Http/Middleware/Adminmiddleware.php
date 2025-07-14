<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Special admin check
            if (
                $user->email === 'mm0489500@gmail.com' &&
                Hash::check('Prospello@5407', $user->getAuthPassword()) // Use getAuthPassword() here
            ) {
                return $next($request); // Allow special admin
            }

            // Block all other users
            abort(403, 'Unauthorized action.');
        }

        // If not logged in, redirect to login page
        return redirect('/login');
    }
}
