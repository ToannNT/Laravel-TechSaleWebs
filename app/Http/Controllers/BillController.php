<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Cart;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
{
    public function processPayment(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|min:10,max:9999999999',
            'email' => 'required|email|max:50',
            'address' => 'required|string|max:255',
            'pttt' => 'required|integer|in:0,1,2'
        ]);

        // DB::transaction(function () use ($request) {
        $bill = DB::transaction(function () use ($request) {

            $user = Auth::user();
            $total = Cart::where('user_id', $user->id)
                ->where('status', 1)
                ->sum(DB::raw('gia * soluong'));

            $bill = Bill::create([
                'user_id' => $user->id,
                'ma_hoadon' => strtoupper(uniqid('HD')),
                'ten_nguoidat' => $request->name,
                'diachi_nguoidat' => $request->address,
                'sdt_nguoidat' => $request->phone,
                'email_nguoidat' => $request->email,
                'pttt' => $request->pttt,
                'total' => $total,
                'voucher' => 0, // Assuming no voucher is used
                'ship' => 0, // Assuming no shipping cost
                'order_notes' => $request->note,
                'tong' => $total, // Assuming no additional cost
                'ngaydat' => now(),
            ]);

            $cartItems = Cart::where('user_id', $user->id)
                ->where('status', 1)
                ->get();

            foreach ($cartItems as $item) {
                OrderDetail::create([
                    'madh' => strtoupper(uniqid('OD')),
                    'user_id' => $user->id,
                    'product_id' => $item->product_id,
                    'bill_id' => $bill->id,
                    'ten' => $item->ten,
                    'gia' => $item->gia,
                    'hinh' => $item->hinh,
                    'mau' => $item->mau,
                    'soluong' => $item->soluong,
                    'status' => 0, // Assuming status is 0 for newly created orders
                    'ngaydat' => now(),
                ]);
            }

            // Clear the cart items with status 1
            Cart::where('user_id', $user->id)
                ->where('status', 1)
                ->delete();

            return $bill;
        });

        // return redirect()->route('paymentsuccess',['ma_hd' => $bill->ma_hoadon])->with('success', 'Thanh toán thành công!');

        return redirect()->route('paymentsuccess', ['ma_hd' => $bill->ma_hoadon])->with('success', 'Thanh toán thành công!');
    }
}
