<?php

namespace App\Models;

use App\Models\Catalog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'catalog_id',
        'ten',
        'gia',
        'giamgia',
        'quantity',
        'status',
        'motachitiet',
        'ma_sp',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->ma_sp = strtoupper(Str::random(10));
        });
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }
    public function catalog()
    {
        return $this->belongsTo(Catalog::class, 'catalog_id');
    }



    public function colors()
    {
        return $this->hasMany(Color::class, 'product_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'product_id');
    }


    public function scopeInStock($query)
    {
        return $query->with('catalog')->where('quantity', '>', 0)->orderByDesc('created_at');
    }


    public function scopeHotProduct($query, $limit)
    {

        return $query->with(['catalog', 'images'])
            ->where('sold', '>', 0,)
            ->where('quantity', '>', 0)
            ->orderByDesc('sold')
            ->limit($limit);
    }

    public function scopeNewProduct($query, $limit)
    {
        return $query->with(['catalog', 'images'])
            ->where('quantity', '>', 0)
            ->orderByDesc('created_at')
            ->limit($limit);
    }

    public function scopeProductByCatalog($query, $catalog_id)
    {

        return $query
            ->with(['catalog', 'images'])
            ->where('quantity', '>', 0)
            ->where('catalog_id', $catalog_id)
            ->orderByDesc('id');
    }
    public function scopeProductInterested($query, $limit)
    {

        return $query
            ->with(['catalog', 'images'])
            ->where('view', '>', 100)
            ->orderByDesc('id')
            ->limit($limit);
    }
    public function scopeProductSale($query, $limit)
    {

        return $query
            ->with(['catalog', 'images'])
            ->where('giamgia', '>', 0)
            ->orderBy('giamgia', 'asc')
            ->limit($limit);
    }
    public static function countItemByCategory($catalog_id)
    {

        return Product::where('catalog_id', $catalog_id)->count();
    }


    public function scopeFilter(Builder $query, array $filters)
    {
        if (!empty($filters['catalog'])) {
            $query->where('catalog_id', $filters['catalog']);
        }

        if (!empty($filters['search'])) {
            $query->where('ten', 'like', '%' . $filters['search'] . '%');
        }
        if (!empty($filters['sortBy'])) {
            if ($filters['sortBy'] == 'price') {
                // $query->orderBy('gia', 'asc');
                $query->orderByRaw('CASE WHEN giamgia > 0 THEN giamgia ELSE gia END asc');
            } elseif ($filters['sortBy'] == '-price') {
                // $query->orderBy('gia', 'desc');
                $query->orderByRaw('CASE WHEN giamgia > 0 THEN giamgia ELSE gia END desc');
            } elseif ($filters['sortBy'] == 'name') {
                $query->orderBy('ten', 'asc');
            } elseif ($filters['sortBy'] == '-name') {
                $query->orderBy('ten', 'desc');
            }
        }
        return $query;
    }
}
