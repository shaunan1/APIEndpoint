<?php

// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari penamaan konvensi Laravel (opsional)
    protected $table = 'products';

    // Tentukan field yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];
}

