<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product2')->insert([
            [
                'name' => 'iPhone 15',
                'price' => 1000,
                'image' => 'iphone15.jpg',
                'cate_id' => 1, // Đảm bảo category ID này tồn tại
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MacBook Pro',
                'price' => 2000,
                'image' => 'macbook.jpg',
                'cate_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nike Shoes',
                'price' => 150,
                'image' => 'nike.jpg',
                'cate_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
