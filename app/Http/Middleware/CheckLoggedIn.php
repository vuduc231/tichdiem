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
        // if (Auth::check() && !Auth::user()->hasRole()) {
        //     // Người dùng đã đăng nhập nhưng không có vai trò
        //     // Thực hiện các hành động xử lý hoặc chuyển hướng tại đây
        //     return redirect('/login');
        // }
        //get current user in session
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }

        //get current token in session
        $token = session()->get('access_token');
        if (!$token) {
            return redirect('/login');
        }

        //if not, redirect to login page
        // return redirect('/login');

        return $next($request);
    }
}
