<?php

namespace App\Models;

use Database\Seeders\BillSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
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
        return $this->hasMany(Customer::class, 'user_id');
    }

    public function bills()
    {
        return $this->hasMany(Bill::class, 'id_user');
    }

    public function news()
    {
        return $this->hasMany(News::class, 'id_user');
    }
}
