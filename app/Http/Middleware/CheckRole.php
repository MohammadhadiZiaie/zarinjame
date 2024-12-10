<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        if (!$user || !$user->roles()->whereIn('name', $roles)->exists()) {
            return redirect()->route('login')->withErrors('دسترسی به این بخش مجاز نیست.');
        }

        return $next($request);
    }
}
