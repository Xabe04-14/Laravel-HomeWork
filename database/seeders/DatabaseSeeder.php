<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
                $this->call([
                    UserssSeeder::class,
                    CustomerSeeder::class,
                    Type_ProductSeeder::class,
                    ProductsSeeder::class,
                    BillSeeder::class,
                    BillDetailSeeder::class,
                    NewsSeeder::class,
                    SlideSeeder::class,
                ]);
        
    }
}
