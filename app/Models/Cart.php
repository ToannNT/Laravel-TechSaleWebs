<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'product_id', 'ten', 'hinh', 'gia', 'soluong', 'thanhtien', 'mau', 'status'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // public static  function countItemCart($user_id)
    // {
    //     return Cart::where('user_id', $user_id)->count();
    // }


    public function scopeGetProductCartByUser($query, $user_id)
    {
        return $query->where('user_id', $user_id)->orderByDesc('id');
    }
}