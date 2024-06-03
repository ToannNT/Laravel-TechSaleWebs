<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view("admin.login");
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 1) {
                //lưu user vào session 
                $request->session()->put('admin', $user);
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['error' => 'Tài khoản không có quyền truy cập vào trang này']);
            }
        }

        return redirect()->route('admin.login')->withErrors(['error' => 'Email hoặc mật khẩu không đúng']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('admin');
        return redirect()->route('admin.login');
    }
}
