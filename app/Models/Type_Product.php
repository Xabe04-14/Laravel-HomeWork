<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Product extends Model
{
    use HasFactory;

    protected $table = 'type_products'; // Tên bảng trong database

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    // Quan hệ với bảng Products (một loại sản phẩm có nhiều sản phẩm)
    public function products()
    {
        return $this->hasMany(Product::class, 'id_type');
    }
}
