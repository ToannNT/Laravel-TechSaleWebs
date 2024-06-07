<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'ma_hoadon', 'ten_nguoidat', 'diachi_nguoidat', 'sdt_nguoidat', 'email_nguoidat', 'pttt', 'total', 'voucher', 'ship', 'order_notes', 'tong', 'ngaydat'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'bill_id');
    }
}