<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCatagory extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_dm',
        'stt',
        'sethome',
    ];

    protected $table = 'catalogs'; // Chỉ định bảng nếu khác với tên model
    public function scopeListCatagories($query)
    {
        return $query->orderBy('stt', 'asc');
    }
}
