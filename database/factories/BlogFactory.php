<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_catalog' => $this->faker->numberBetween(1, 10), // Giả sử có danh mục từ 1 đến 10
            'hinh' => $this->faker->imageUrl(200, 200, 'cats', true, 'Faker'), // URL hình ảnh giả lập
            'tieude' => $this->faker->sentence, // Tiêu đề giả lập
            'noidung' => $this->faker->paragraph, // Nội dung giả lập
            'ngay' => $this->faker->date, // Ngày giả lập
        ];
    }
}
