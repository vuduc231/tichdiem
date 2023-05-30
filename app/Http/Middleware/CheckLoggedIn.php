<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLoggedIn
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!session('user') || !session('access_token')) {
            session(['returnUrl' => url()->current()]);
            return redirect()->route('login');
        }

        return $next($request);
    }
}
