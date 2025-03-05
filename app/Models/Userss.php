<?php

namespace App\Models;

use Database\Seeders\BillSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Userss extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'userss'; // Đảm bảo trỏ đúng vào bảng userss

    protected $fillable = [
        'full_name',
        'email',
        'password',
        'remember_token',
    ];

    public function customers()
    {
        return $this->hasMany(Customers::class, 'user_id');
    }

    public function bills()
    {
        return $this->hasMany(Bills::class, 'id_user');
    }

    public function news()
    {
        return $this->hasMany(News::class, 'id_user');
    }
}
