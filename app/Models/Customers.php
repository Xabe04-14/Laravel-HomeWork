<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'gender',
        'email',
        'address',
        'phone_number',
        'note',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(Userss::class, 'user_id');
    }

    public function bills()
    {
        return $this->hasMany(Bills::class, 'id_customer');
    }
}

