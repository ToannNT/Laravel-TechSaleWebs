<?php

namespace App\Http\Controllers\admin;

use App\Models\Bill;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $processingOrders = OrderDetail::where('status', 0)->count();
        $shippingOrders = OrderDetail::where('status', 1)->count();
        $deliveredOrders = OrderDetail::where('status', 3)->count();
        $canceledOrders = OrderDetail::where('status', 4)->count();
        return view("admin.dashboard", compact('processingOrders', 'shippingOrders', 'deliveredOrders', 'canceledOrders'));
    }

    public function getAreaChartData()
    {
        $data = Bill::selectRaw('DATE(created_at) as date, SUM(tong) as revenue')
            ->groupBy('date')
            ->get();

        $labels = $data->pluck('date');
        $revenue = $data->pluck('revenue');

        return response()->json(['labels' => $labels, 'revenue' => $revenue]);
    }


    public function getBarChartData()
    {
        $data = Bill::selectRaw('MONTH(created_at) as month, SUM(tong) as revenue')
            ->groupBy('month')
            ->get();

        $labels = $data->pluck('month');
        $revenue = $data->pluck('revenue');

        return response()->json(['labels' => $labels, 'revenue' => $revenue]);
    }
}
