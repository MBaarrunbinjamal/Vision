<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class JetstreamSessionOverride
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Special admin check: email + password
            if (
                $user->email === 'mm0489500@gmail.com' &&
                Hash::check('Prospello@5407', $user->password)
            ) {
                // Redirect special admin away from user routes
                if (!$request->is('dashboard')) {
                    return redirect('/dashboard');
                }
            }
        }

        return $next($request);
    }
}
