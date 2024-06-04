<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\User as ModelsUser;

class AdminUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'birthdate',
        'gender',
        'role',
    ];

    protected $table = 'users'; // Chỉ định bảng nếu khác với tên model
    public function scopeFilterUsersAdmin(Builder $query, array $filters)
    {
        if (isset($filters['role'])) {
            $query->where('role', $filters['role']);
        }
        if (!empty($filters['search'])) {
            $query->where('email', 'like', '%' . $filters['search'] . '%');
        }
        return $query;
    }
}
