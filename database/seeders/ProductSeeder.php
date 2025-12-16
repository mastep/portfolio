<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Зеленый чай Жасмин',
                'description' => 'Нежный зеленый чай с ароматом жасмина. Освежающий и бодрящий.',
                'price' => 450.00,
                'stock' => 50,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

