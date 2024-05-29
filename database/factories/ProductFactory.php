<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Catalog;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
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
        return [
            'catalog_id' =>  Catalog::factory(),
            'ma_sp' => fake()->bothify('???###'),
            'ten' => fake()->word,
            'gia' => fake()->numberBetween(10000, 100000),
            'giamgia' => fake()->optional()->numberBetween(5000, 50000),
            // 'hinh' => fake()->imageUrl(200, 200),
            'motangan' => fake()->sentence,
            'motachitiet' => fake()->paragraph,
            'view' => fake()->numberBetween(0, 1000),
            'sold' => fake()->numberBetween(0, 1000),
            'quantity' => fake()->numberBetween(1, 200),
            'status' => 0,  // Thêm dòng này để đặt giá trị mặc định cho trường status là 0

        ];
    }
}
