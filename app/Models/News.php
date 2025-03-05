<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news'; // Đảm bảo đúng tên bảng

    protected $fillable = [
        'title',
        'content',
        'image',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(Userss::class, 'id_user');
    }
}
