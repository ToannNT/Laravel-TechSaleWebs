<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $listAllProductCart = [];
        $user = Auth::user();
        if ($user) {
            $listAllProductCart = Cart::getProductCartByUser($user->id)->get();
        }
        return view("clients.cart", compact("listAllProductCart"));
    }
    public function updateStatus(Request $request)
    {
        $cartItem = Cart::find($request->id);
        $cartItem->status = $request->status;
        $cartItem->save();

        //tính tổng tiền
        $totalProductCart = Cart::where('user_id', auth()->id())
            ->where('status', 1)
            ->sum(DB::raw('gia * soluong'));


        return response()->json(['success' => true, 'totalProductCart' => $totalProductCart]);
    }
    public function updateQuantity(Request $request)
    {
        $cartItem = Cart::find($request->id);
        $cartItem->soluong = $request->soluong;
        $cartItem->save();

        //tính tổng tiền
        $totalProductCart = Cart::where('user_id', auth()->id())
            ->where('status', 1)
            ->sum(DB::raw('gia * soluong'));

        return response()->json(['success' => true, 'totalProductCart' => $totalProductCart]);
    }
    public function deleteItem(Request $request)
    {
        $cartItem = Cart::find($request->id);
        $cartItem->delete();
        //tính tổng tiền
        $totalProductCart = Cart::where('user_id', auth()->id())
            ->where('status', 1)
            ->sum(DB::raw('gia * soluong'));

        return response()->json(['success' => true, 'totalProductCart' => $totalProductCart]);
    }
    public function addtocart(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }


        $product = Product::find($request->product_id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }
        // Sử dụng giá trị từ `oneProduct->images` nếu tồn tại
        $imageUrl = $product->images->first() ? $product->images->first()->url : 'default-image.jpg';

        //check exist 
        $existingCartItem = Cart::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->where('mau', $request->mau)
            ->first();

        if ($existingCartItem) {
            $existingCartItem->soluong += $request->soluong;
            $existingCartItem->thanhtien = $existingCartItem->gia * $existingCartItem->soluong;
            $existingCartItem->save();
        } else {
            // Sản phẩm chưa tồn tại trong giỏ hàng, tạo mới
            Cart::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'ten' => $product->ten,
                'hinh' => $imageUrl,
                'gia' => $product->gia,
                'soluong' => $request->soluong,
                'status' => 0,
                'mau' => $request->mau,
            ]);
        }
        return redirect()->back()->with('successAddToCart', 'Thêm sản phẩm thành công');
    }
}
