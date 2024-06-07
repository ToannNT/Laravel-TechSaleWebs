<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            $listPaymentItems = Cart::where('user_id', $user->id)->where('status', 1)->orderByDesc('id')->get();
            $countListPaymentItems = $listPaymentItems->count();
            // dd($listPaymentItems);
            if ($countListPaymentItems > 0) {
                return view("clients.payment", compact('user', 'listPaymentItems'));
            } else {
                return back()->with('error', 'Vui lòng chọn sản phẩm để thanh toán');
            }
        } else {
            return back()->with('error', 'Vui lòng đăng nhập để tiến hành thanh toán');
        }
    }
}