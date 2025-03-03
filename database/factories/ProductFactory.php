<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 500, 15000),
            'stock' => $this->faker->numberBetween(5, 50),
            'discount' => $this->faker->randomElement([0, 5, 10, 15]),
            'category_id' => Category::factory(),
            'brand_id' => Brand::factory(),
            'image' => 'default.jpg',
        ];
    }
}
