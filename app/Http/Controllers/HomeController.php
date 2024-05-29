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

        // dd($hotProduct);
        return view("clients.home", compact("hotProduct", "newProduct"));
    }


    // public function HotProduct()
    // {
    //     $hotProduct = Product::hotProduct(8)->get();
    //     return view("clients.home", compact("hotProduct"));
    // }
}