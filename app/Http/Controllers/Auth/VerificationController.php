<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerificationController extends Controller
{
    public function verify($id, $token)
    {
        $user = User::findOrFail($id);

        if ($user->verification_token === $token) {
            $user->email_verified_at = now();
            $user->verification_token = null;
            $user->save();
            return redirect()->route('login')->with('success', 'Email đã được xác thực thành công.');
        }

        return redirect()->route('login')->with('error', 'Liên kết xác thực không hợp lệ.');
    }
}
