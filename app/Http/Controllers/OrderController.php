<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            $listBillByUser = Bill::where('user_id', $user->id)->orderByDesc('id')->get();
            // Đếm số lượng đơn trong bảng order_details
            $orderDetailCount = OrderDetail::whereIn('bill_id', $listBillByUser->pluck('id'))->count();
            return view("clients.order", compact('user', 'listBillByUser', 'orderDetailCount'));
        } else {
            return back()->with('error', 'Vui lòng đăng nhập để xem hóa đơn');
        }
    }

    public function confirmOrder(OrderDetail $order)
    {
        if ($order->user_id != auth()->id()) {
            return redirect()->back()->with('error', 'Bạn không có quyền xác nhận đơn hàng này.');
        }

        $order->status = 3; // Đã nhận hàng
        $order->save();

        return redirect()->back()->with('success', 'Bạn đã xác nhận đã nhận hàng.');
    }
    public function cancelOrder(OrderDetail $order)
    {
        if ($order->user_id != auth()->id()) {
            return redirect()->back()->with('error', 'Bạn không có quyền hủy đơn hàng này.');
        }

        $order->status = 4; // Hủy đơn hàng
        $order->save();

        return redirect()->back()->with('success', 'Đơn hàng đã bị hủy.');
    }
}
