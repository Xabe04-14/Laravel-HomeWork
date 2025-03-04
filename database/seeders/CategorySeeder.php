<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Electronics', 'description' => 'Devices and gadgets', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fashion', 'description' => 'Clothing and accessories', 'created_at' => now(), 'updated_at' => now()],    
        ]);
    }
}
