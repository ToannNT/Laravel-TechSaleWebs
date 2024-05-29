<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\Catalog;
use App\Models\Product;
use App\Models\Color;
use App\Models\Image;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // $this->call([
        //     ProductsSeeder::class,
        // ]);
        // Catalog::factory(10)->create();
        // Product::factory(50)->create();
        // Blog::factory(5)->create();

        Catalog::factory(10)->create()->each(function ($catalog) {
            Product::factory(5)->create(['catalog_id' => $catalog->id])->each(function ($product) {
                Color::factory(3)->create(['product_id' => $product->id]);
                Image::factory(5)->create(['product_id' => $product->id]);
            });
        });
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
