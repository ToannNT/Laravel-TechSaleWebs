<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;
use App\Models\Product as ModelsProduct;

class AdminProduct extends ModelsProduct
{
    use HasFactory;
    protected $table = 'products'; // Chỉ định bảng nếu khác với tên model

    public function scopeGetAllProductsAdmin($query)
    {
        return $query->with('catalog')->orderByDesc('created_at');
    }

    public function scopeFilterProductsAdmin(Builder $query, array $filters)
    {
        if (!empty($filters['catalog'])) {
            $query->where('catalog_id', $filters['catalog']);
        }
        if (!empty($filters['search'])) {
            $query->where('ten', 'like', '%' . $filters['search'] . '%');
        }
        if (!empty($filters['sortBy'])) {
            if ($filters['sortBy'] == '-gia') {
                // $query->orderBy('gia', 'asc');
                $query->orderByRaw('CASE WHEN giamgia > 0 THEN giamgia ELSE gia END asc');
            } else if ($filters['sortBy'] == 'gia') {
                // $query->orderBy('gia', 'desc');
                $query->orderByRaw('CASE WHEN giamgia > 0 THEN giamgia ELSE gia END desc');
            }
        }
        return $query;
    }
}
