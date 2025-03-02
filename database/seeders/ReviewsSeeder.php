<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'user_id' => 1,
                'product_id' => 1,
                'rating' => 5,
                'review' => 'Amazing quality! Super comfortable!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'product_id' => 3,
                'rating' => 4,
                'review' => 'Nice color and smooth application!',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
