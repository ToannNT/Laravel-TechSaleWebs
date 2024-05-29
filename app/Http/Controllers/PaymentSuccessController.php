<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentSuccessController extends Controller
{
    public function index()
    {
        return view("clients.paymentsuccess");
    }
}
