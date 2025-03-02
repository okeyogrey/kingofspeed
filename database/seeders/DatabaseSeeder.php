<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call all the seeders
        $this->call([
            CategoriesSeeder::class,
            BrandsSeeder::class,
            ProductsSeeder::class,
            UsersSeeder::class,
            OrdersSeeder::class,
            ReviewsSeeder::class,
        ]);

        // Optional: Create dummy users using factories
        User::factory(10)->create();
    }
}
