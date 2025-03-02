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
            ['id' => 1, 'name' => 'Shoes', 'parent_id' => null],
            ['id' => 2, 'name' => 'Cosmetics', 'parent_id' => null],

            // Subcategories under Shoes
            ['id' => 3, 'name' => 'Men’s Wear', 'parent_id' => 1],
            ['id' => 4, 'name' => 'Ladies’ Wear', 'parent_id' => 1],
            ['id' => 5, 'name' => 'Kids’ Wear', 'parent_id' => 1],

            // Subcategories under Cosmetics
            ['id' => 6, 'name' => 'Skin Cosmetics', 'parent_id' => 2],
            ['id' => 7, 'name' => 'Hair Cosmetics', 'parent_id' => 2],
            ['id' => 8, 'name' => 'Makeup Cosmetics', 'parent_id' => 2],
            ['id' => 9, 'name' => 'Other Cosmetics', 'parent_id' => 2],

            // Further subcategories under Skin Cosmetics
            ['id' => 10, 'name' => 'Creams & Lotions', 'parent_id' => 6],
            ['id' => 11, 'name' => 'Face Masks', 'parent_id' => 6],
            ['id' => 12, 'name' => 'Tinted Bases', 'parent_id' => 6],
            ['id' => 13, 'name' => 'Moisturizers', 'parent_id' => 6],
            ['id' => 14, 'name' => 'Body Scrubs', 'parent_id' => 6],
            ['id' => 15, 'name' => 'Vitamin C Serums', 'parent_id' => 6],
            ['id' => 16, 'name' => 'Night Creams', 'parent_id' => 6],

            // Further subcategories under Hair Cosmetics
            ['id' => 17, 'name' => 'Shampoos & Conditioners', 'parent_id' => 7],
            ['id' => 18, 'name' => 'Hair Growth Serums', 'parent_id' => 7],
            ['id' => 19, 'name' => 'Hairdressing Products', 'parent_id' => 7],

            // Further subcategories under Makeup Cosmetics
            ['id' => 20, 'name' => 'Lipstick', 'parent_id' => 8],
            ['id' => 21, 'name' => 'Lip Balm & Mascara', 'parent_id' => 8],
            ['id' => 22, 'name' => 'Nail Polish', 'parent_id' => 8],
            ['id' => 23, 'name' => 'Make-up Powders', 'parent_id' => 8],

            // Further subcategories under Other Cosmetics
            ['id' => 24, 'name' => 'Perfumes', 'parent_id' => 9],
            ['id' => 25, 'name' => 'Deodorants & Anti-Perspirants', 'parent_id' => 9],
            ['id' => 26, 'name' => 'Shaving Products', 'parent_id' => 9],
            ['id' => 27, 'name' => 'Sunbathing Products', 'parent_id' => 9],
            ['id' => 28, 'name' => 'Skin-Whitening Products', 'parent_id' => 9],
            ['id' => 29, 'name' => 'Anti-Wrinkle Products', 'parent_id' => 9],
        ]);
    }
}
