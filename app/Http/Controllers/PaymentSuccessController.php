<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentSuccessController extends Controller
{
    public function index($ma_hd)
    {
        $user = Auth::user();
        if ($user) {
            $billPaymentSuccess = Bill::where('ma_hoadon', $ma_hd)->firstOrFail();
            // dd($listPaymentItems);
            return view("clients.paymentsuccess", compact('billPaymentSuccess'));
        } else {
            return back();
        }



        // return view("clients.paymentsuccess");
    }
}