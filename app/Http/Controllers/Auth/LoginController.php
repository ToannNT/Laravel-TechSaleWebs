<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view("clients.login");
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            if (Auth::user()->email_verified_at) {
                $request->session()->regenerate();
                return redirect()->intended('/')->with('success', 'Đăng nhập thành công');
            } else {
                Auth::logout();

                // return redirect()->intended('/login')->with('notauthentic', 'Tài khoản của bạn chưa được xác thực.');

                return back()->withErrors([
                    'notauthentic' => 'Tài khoản của bạn chưa được xác thực !!!',
                ])->withInput();
            }
        }

        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không chính xác.',
        ])->withInput();
    }



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
