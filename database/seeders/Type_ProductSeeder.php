<?php

namespace Database\Seeders;

use App\Models\Type_Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Type_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Type_Product::factory(5)->create();

    }
}
