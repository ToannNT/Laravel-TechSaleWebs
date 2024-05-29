<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Catalog>
 */
class CatalogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ten_dm' => $this->faker->text(10),
            'stt' => $this->faker->numberBetween(1, 100),
            'sethome' => $this->faker->boolean ? 1 : 0,
        ];
    }
}
