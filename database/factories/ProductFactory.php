<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = DB::table('categories')->inRandomOrder()->first();
        $brand = DB::table('brands')->inRandomOrder()->first();
        $name = fake()->streetName();
        return [
            'category_id' => $category->id,
            'brand_id' => $brand->id,
            'name' => $name,
            'description' => fake()->text(rand(500, 600)),
            'price' => fake()->randomFloat($nbMaxDecimals = 1, $min = 1000, $max = 10000),
            'stock' => rand(0, 20),
            'viewed' => rand(0, 100),
            'liked' => rand(0, 100),
            'slug' => str($name . '-' . rand(100, 999))->slug(),
        ];
    }
}
