<?php

// database/seeders/OrderSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::create([
            'user_id' => 1, // Pastikan user_id ini ada di tabel users Anda
            'total' => 30.99,
            'status' => 'completed',
        ]);

        Order::create([
            'user_id' => 2, // Pastikan user_id ini ada di tabel users Anda
            'total' => 50.99,
            'status' => 'pending',
        ]);

    }
}
