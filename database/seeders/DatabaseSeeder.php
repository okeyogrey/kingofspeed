<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Order;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call specific seeders for structured data
        $this->call([
            CategoriesSeeder::class,
            BrandsSeeder::class,
            ProductsSeeder::class,
            UsersSeeder::class,
            OrdersSeeder::class,
            ReviewsSeeder::class,
        ]);

        // Generate additional dummy data using factories
        User::factory(10)->create();
        Category::factory(5)->create();
        Brand::factory(5)->create();
        Product::factory(20)->create();
        Order::factory(10)->create();
        Review::factory(30)->create();
    }
}
