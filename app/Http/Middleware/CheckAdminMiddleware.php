<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $admin = $request->session()->get('admin');
        if (!$admin) {
            return redirect()->route('admin.login')->withErrors(['error' => 'Vui lòng đăng nhập tài khoản admin']);
        } else if ($admin && $admin->role == 1) {
            return $next($request);
        }
        return redirect()->route('admin.login')->withErrors(['error' => 'Tài khoản không có quyền truy cập']);


        // return $next($request);

    }
}
