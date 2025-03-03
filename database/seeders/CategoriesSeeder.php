<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            // Main categories
            ['name' => 'Shoes', 'parent_id' => null],
            ['name' => 'Cosmetics', 'parent_id' => null],

            // Subcategories under Shoes
            ['name' => 'Men’s Wear', 'parent_id' => 1],
            ['name' => 'Ladies’ Wear', 'parent_id' => 1],
            ['name' => 'Kids’ Wear', 'parent_id' => 1],

            // Subcategories under Cosmetics
            ['name' => 'Skin Cosmetics', 'parent_id' => 2],
            ['name' => 'Hair Cosmetics', 'parent_id' => 2],
            ['name' => 'Makeup Cosmetics', 'parent_id' => 2],
            ['name' => 'Other Cosmetics', 'parent_id' => 2],

            // Further subcategories under Skin Cosmetics
            ['name' => 'Creams & Lotions', 'parent_id' => 6],
            ['name' => 'Face Masks', 'parent_id' => 6],
            ['name' => 'Tinted Bases', 'parent_id' => 6],
            ['name' => 'Moisturizers', 'parent_id' => 6],
            ['name' => 'Body Scrubs', 'parent_id' => 6],
            ['name' => 'Vitamin C Serums', 'parent_id' => 6],
            ['name' => 'Night Creams', 'parent_id' => 6],

            // Further subcategories under Hair Cosmetics
            ['name' => 'Shampoos & Conditioners', 'parent_id' => 7],
            ['name' => 'Hair Growth Serums', 'parent_id' => 7],
            ['name' => 'Hairdressing Products', 'parent_id' => 7],

            // Further subcategories under Makeup Cosmetics
            ['name' => 'Lipstick', 'parent_id' => 8],
            ['name' => 'Lip Balm & Mascara', 'parent_id' => 8],
            ['name' => 'Nail Polish', 'parent_id' => 8],
            ['name' => 'Make-up Powders', 'parent_id' => 8],

            // Further subcategories under Other Cosmetics
            ['name' => 'Perfumes', 'parent_id' => 9],
            ['name' => 'Deodorants & Anti-Perspirants', 'parent_id' => 9],
            ['name' => 'Shaving Products', 'parent_id' => 9],
            ['name' => 'Sunbathing Products', 'parent_id' => 9],
            ['name' => 'Skin-Whitening Products', 'parent_id' => 9],
            ['name' => 'Anti-Wrinkle Products', 'parent_id' => 9],
        ]);
    }
}
