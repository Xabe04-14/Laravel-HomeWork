<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products'; // Tên bảng trong database

    protected $fillable = [
        'name',
        'id_type',
        'description',
        'unit_price',
        'promotion_price',
        'image',
        'unit'
    ];

    // Quan hệ với bảng TypeProducts (loại sản phẩm)
    public function type()
    {
        return $this->belongsTo(Type_Product::class, 'id_type');
    }

    // Quan hệ với bảng BillDetail (chi tiết hóa đơn)
    public function billDetails()
    {
        return $this->hasMany(BillDetail::class, 'id_product');
    }

    // Quan hệ với bảng Slide (nếu có sản phẩm trong slide)
    public function slides()
    {
        return $this->hasMany(Slide::class, 'id_product');
    }
}
