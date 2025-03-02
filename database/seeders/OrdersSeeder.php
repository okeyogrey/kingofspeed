<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'user_id' => 1, // Assuming User ID 1 exists
                'total_price' => 7500.00,
                'status' => 'completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Assuming User ID 2 exists
                'total_price' => 1200.00,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'total_price' => 8500.00,
                'status' => 'shipped',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // Assuming another user exists
                'total_price' => 5000.00,
                'status' => 'processing',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
