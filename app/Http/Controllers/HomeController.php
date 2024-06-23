<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hotProduct = Product::hotProduct(8)->get();
        $newProduct = Product::newProduct(8)->get();
        $interestedProduct = Product::productInterested(3)->get();
        $saleProduct = Product::productSale(3)->get();
        return view("clients.home", compact("hotProduct", "newProduct", "interestedProduct", "saleProduct"));
    }
}
