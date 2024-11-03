<?php

// database/seeders/ProductSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Sample Product 1',
            'description' => 'This is a sample description for product 1.',
            'price' => 10.99,
            'stock' => 100,
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'description' => 'This is a sample description for product 2.',
            'price' => 15.99,
            'stock' => 50,
        ]);
    }
}

