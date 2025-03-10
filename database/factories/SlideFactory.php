<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Slide;
use App\Models\Product;

class SlideFactory extends Factory
{
    protected $model = Slide::class;

    public function definition()
    {
        return [
            'link' => $this->faker->url(),
            'image' => $this->faker->imageUrl(640, 480, 'advertisement'),
            'id_product' => Product::inRandomOrder()->first()->id ?? null,
        ];
    }
}
