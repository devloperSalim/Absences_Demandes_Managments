<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StagiaireAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('stagiaire')->check()) {
            return $next($request);
        }

        return redirect(route('login.stagiaire'));
    }
}
