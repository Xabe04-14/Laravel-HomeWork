<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Userss;

class UserssSeeder extends Seeder
{
    public function run()
    {
        Userss::factory(10)->create();
    }
}

