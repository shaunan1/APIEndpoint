<?php

// app/Models/Order.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari penamaan konvensi Laravel (opsional)
    protected $table = 'orders';

    // Tentukan field yang dapat diisi secara massal
    protected $fillable = [
        'user_id',
        'total',
        'status',
    ];

    // Definisikan relasi dengan model User (jika ada model User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
