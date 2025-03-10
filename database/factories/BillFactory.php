<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\User;

class BillFactory extends Factory
{
    protected $model = Bill::class;

    public function definition()
    {
        return [
            'id_customer' => Customer::inRandomOrder()->first()->id ?? null,
            'id_user' => User::inRandomOrder()->first()->id ?? null,
            'date_order' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 50, 500),
            'payment' => $this->faker->randomElement(['Cash', 'Credit Card', 'Bank Transfer']),
            'note' => $this->faker->sentence(),
        ];
    }
}
