<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            $listBillByUser = Bill::where('user_id', $user->id)->orderByDesc('id')->get();
            return view("clients.order", compact('user', 'listBillByUser'));
        } else {
            return back()->with('error', 'Vui lòng đăng nhập để xem hóa đơn');
        }
    }
}
