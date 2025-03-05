<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;

    protected $table = 'bills'; // Đảm bảo trỏ đúng vào bảng

    protected $fillable = [
        'id_customer',
        'id_user',
        'date_order',
        'total',
        'payment',
        'note',
    ];

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'id_customer');
    }

    public function user()
    {
        return $this->belongsTo(Userss::class, 'id_user');
    }

    public function billDetails()
    {
        return $this->hasMany(BillDetail::class, 'id_bill');
    }
}
