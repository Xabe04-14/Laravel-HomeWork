<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customers;
use App\Models\Userss;

class CustomersFactory extends Factory
{
    protected $model = Customers::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'note' => $this->faker->sentence(),
            'user_id' => Userss::inRandomOrder()->first()->id ?? null,
        ];
    }
}
