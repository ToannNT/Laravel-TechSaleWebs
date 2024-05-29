<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index($id)
    {
        $oneProduct = Product::with('images', 'colors')->findOrFail($id);
        $catalog_id = $oneProduct->catalog_id;
        $listProductByCatalog = Product::productByCatalog($catalog_id)->where('id', '!=', $id)->get();
        // dd($listProductByCatalog);
        return view("clients.productdetail", compact("oneProduct", "listProductByCatalog"));
    }
}
