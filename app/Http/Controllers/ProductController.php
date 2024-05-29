<?php

namespace App\Http\Controllers;

use App\Models\Admin\AdminProduct;
use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $products = Product::inStock()->get();
    //     return view("clients.product", compact("products"));
    // }

    public function index(Request $request)
    {
        $filters = $request->only(['catalog', 'sortBy', 'search']);
        $products = Product::filter($filters)->paginate(12)->appends($filters);
        // dd($products);
        $categories = Catalog::all();
        // dd($categories);
        return view('clients.product', compact('products', 'categories'));
    }
}
