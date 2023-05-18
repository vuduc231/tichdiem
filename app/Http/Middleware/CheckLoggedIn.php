<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLoggedIn
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && !Auth::user()->hasRole()) {
            // Người dùng đã đăng nhập nhưng không có vai trò
            // Thực hiện các hành động xử lý hoặc chuyển hướng tại đây
            return redirect('/login');
        }

        return $next($request);
    }
}
