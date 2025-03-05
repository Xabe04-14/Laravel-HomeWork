<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $table = 'slide'; // Tên bảng trong database

    protected $fillable = [
        'link',
        'image',
        'id_product',
    ];

    // Quan hệ với bảng Products (một slide có thể liên kết với một sản phẩm)
    public function product()
    {
        return $this->belongsTo(Products::class, 'id_product');
    }
}
