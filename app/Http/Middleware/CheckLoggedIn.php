<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
{
    $response = $next($request);

    if (Auth::check()) {
        // Người dùng đã đăng nhập thành công
        // Thêm mã logic của bạn ở đây
    } else {
        return redirect()->route('login'); // Chuyển hướng đến trang đăng nhập
    }

    return $response;
}
}
