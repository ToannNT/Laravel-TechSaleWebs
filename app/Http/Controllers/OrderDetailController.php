<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderDetailController extends Controller
{
    public function index($bill_id)
    {
        $user = Auth::user();
        if ($user) {
            $listOrderdByUser = OrderDetail::with('bill')->where('bill_id', $bill_id)->where('user_id', $user->id)->orderByDesc('id')->get();
            $informationDetailBill = Bill::findOrFail($bill_id);
            if ($listOrderdByUser->isNotEmpty()) {
                // Kết quả trả về không rỗng, tức là có ít nhất một bản ghi thỏa mãn điều kiện
                return view("clients.orderdetail", compact('listOrderdByUser', 'informationDetailBill'));
            } else {
                // Kết quả trả về rỗng
                return back()->with('error', 'Không có đơn hàng phù hợp');
            }
        } else {
            return back()->with('error', 'Đăng nhập để xem đơn hàng !');
        }
    }
}
