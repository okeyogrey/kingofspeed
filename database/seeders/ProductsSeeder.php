<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Nike Air Max',
                'description' => 'High-quality sneakers for men.',
                'price' => 7500.00,
                'stock' => 20,
                'discount' => 10,
                'category_id' => 3, // Men's Wear
                'brand_id' => 1, // Nike
                'image' => 'nike_air_max.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adidas UltraBoost',
                'description' => 'Comfortable and stylish sportswear shoes.',
                'price' => 8500.00,
                'stock' => 15,
                'discount' => 5,
                'category_id' => 3, // Men's Wear
                'brand_id' => 2, // Adidas
                'image' => 'adidas_ultraboost.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fenty Beauty Lipstick',
                'description' => 'Long-lasting and vibrant lipstick.',
                'price' => 1200.00,
                'stock' => 30,
                'discount' => 0,
                'category_id' => 7, // Makeup Cosmetics
                'brand_id' => 5, // Fenty Beauty
                'image' => 'fenty_lipstick.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Reebok Running Shoes',
                'description' => 'Lightweight and durable running shoes.',
                'price' => 6000.00,
                'stock' => 25,
                'discount' => 15,
                'category_id' => 4, // Ladies' Wear
                'brand_id' => 4, // Reebok
                'image' => 'reebok_running_shoes.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maybelline Fit Me Foundation',
                'description' => 'Matte and poreless foundation for a flawless look.',
                'price' => 1800.00,
                'stock' => 40,
                'discount' => 5,
                'category_id' => 6, // Skin Cosmetics
                'brand_id' => 6, // Maybelline
                'image' => 'maybelline_foundation.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
