<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Type_Product;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'id_type' => Type_Product::inRandomOrder()->first()->id ?? null,
            'description' => $this->faker->sentence(),
            'unit_price' => $this->faker->randomFloat(2, 10, 100),
            'promotion_price' => $this->faker->randomFloat(2, 5, 80),
            'image' => $this->faker->imageUrl(640, 480, 'food'),
            'unit' => $this->faker->word(),
        ];
    }
}
