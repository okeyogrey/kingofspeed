<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            ['name' => 'Nike'],
            ['name' => 'Adidas'],
            ['name' => 'Puma'],
            ['name' => 'Reebok'],
            ['name' => 'Fenty Beauty'],
            ['name' => 'Maybelline'],
            ['name' => 'L’Oréal'],
            ['name' => 'MAC Cosmetics'],
            ['name' => 'Gucci'],
            ['name' => 'Chanel'],
        ]);
    }
}
