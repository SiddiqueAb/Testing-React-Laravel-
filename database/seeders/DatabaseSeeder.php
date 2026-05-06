<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::updateOrCreate([
            'title' => 'Adidas Running Shoes',
        ],
        [
            'img' => 'https://m.media-amazon.com/images/I/71wqj+v9sUL._AC_UL320_.jpg',
            'brand' => 'Adidas',
            'rating' => 4.5,
            'reviews' => 1200,
            'sellPrice' => 79.99,
            'orders' => '5000+',
            'mrp' => '$99.99',
            'discount' => 20,
            'category' => 'men'
        ]);

        Product::updateOrCreate([
            'title' => 'Puma Running Shoes',
        ],
        [
            'img' => 'https://m.media-amazon.com/images/I/71wqj+v9sUL._AC_UL320_.jpg',
            'brand' => 'Puma',
            'rating' => 4.5,
            'reviews' => 1200,
            'sellPrice' => 79.99,
            'orders' => '5000+',
            'mrp' => '$99.99',
            'discount' => 20,
            'category' => 'women'
        ]);
    }
}
