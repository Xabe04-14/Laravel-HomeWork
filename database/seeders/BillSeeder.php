<?php

namespace Database\Seeders;

use App\Models\Bills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bills::factory(10)->create();
        
    }
}
