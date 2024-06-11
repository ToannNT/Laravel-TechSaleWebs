<?php

namespace App\Http\Controllers\Admin;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderDetailAdmin extends Controller
{
    public function index()
    {
        $orders = OrderDetail::orderBy('status', 'asc')->get();
        // dd($orders);
        return view('admin.order.listorder', compact('orders'));
    }

    public function updateStatus($id)
    {
        $order = OrderDetail::find($id);

        if ($order) {
            // Chuyển trạng thái của đơn hàng
            $order->status = ($order->status + 1) % 4;
            $order->save();

            return redirect()->route('admin.orders')->with('success', 'Cập nhật trạng thái thành công!');
        }

        return redirect()->route('orders.index')->with('error', 'Đơn hàng không tồn tại!');
    }
}
