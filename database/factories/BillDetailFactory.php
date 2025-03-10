<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BillDetail;
use App\Models\Bill;
use App\Models\Product;

class BillDetailFactory extends Factory
{
    protected $model = BillDetail::class;

    public function definition()
    {
        return [
            'id_bill' => Bill::inRandomOrder()->first()->id ?? null,
            'id_product' => Product::inRandomOrder()->first()->id ?? null,
            'quantity' => $this->faker->numberBetween(1, 10),
            'unit_price' => $this->faker->randomFloat(2, 10, 100),
            'status' => $this->faker->randomElement(['Pending', 'Shipped', 'Delivered', 'Cancelled']),
        ];
    }
}
