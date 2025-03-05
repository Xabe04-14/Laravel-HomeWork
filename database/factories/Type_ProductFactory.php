<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Type_Product;

class Type_ProductFactory extends Factory
{
    protected $model = Type_Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(640, 480, 'food'),
        ];
    }
}
