<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Laptop ASUS ROG',
            'description' => 'Gaming laptop with RTX 4060',
            'price' => 15000000,
            'stock' => 10
        ]);

        Product::create([
            'name' => 'Mouse Logitech G502',
            'description' => 'Gaming mouse with RGB',
            'price' => 750000,
            'stock' => 25
        ]);

        Product::create([
            'name' => 'Keyboard Mechanical',
            'description' => 'RGB Mechanical Keyboard',
            'price' => 1200000,
            'stock' => 15
        ]);

        Product::create([
            'name' => 'Monitor LG 27"',
            'description' => '144Hz Gaming Monitor',
            'price' => 3500000,
            'stock' => 8
        ]);

        Product::create([
            'name' => 'Headset HyperX',
            'description' => '7.1 Surround Sound',
            'price' => 850000,
            'stock' => 20
        ]);
    }
}
