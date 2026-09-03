<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $products = [
            [
                'name' => 'iPhone 15',
                'category' => 'Electronics',
                'price' => 699.99,
            ],
            [
                'name' => 'Samsung Galaxy S24',
                'category' => 'Electronics',
                'price' => 599.99,
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'category' => 'Electronics',
                'price' => 299.99,
            ],
            [
                'name' => 'Nike Air Max',
                'category' => 'Fashion',
                'price' => 119.99,
            ],
            [
                'name' => 'Adidas Ultraboost',
                'category' => 'Fashion',
                'price' => 139.99,
            ],
            [
                'name' => 'MacBook Air M3',
                'category' => 'Electronics',
                'price' => 999.99,
            ],
            [
                'name' => 'Logitech MX Master 3S',
                'category' => 'Electronics',
                'price' => 89.99,
            ],
            [
                'name' => 'IKEA Office Desk',
                'category' => 'Furniture',
                'price' => 149.99,
            ],
            [
                'name' => 'Canon EOS Camera',
                'category' => 'Photography',
                'price' => 649.99,
            ],
            [
                'name' => 'North Face Jacket',
                'category' => 'Fashion',
                'price' => 179.99,
            ],
        ];

        $product = fake()->randomElement($products);

        return [
            'user_id' => User::factory(),
            'name' => $product['name'],
            'description' => fake()->paragraph(3),
            'price' => $product['price'],
            'category' => $product['category'],
            'condition' => fake()->randomElement([
                'New',
                'Like New',
                'Good',
                'Used',
            ]),
            'stock' => fake()->numberBetween(1, 20),
            'image' => null,
        ];
    }
}
