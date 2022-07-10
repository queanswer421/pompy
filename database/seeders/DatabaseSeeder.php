<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Producer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::create([
            "id" => 1,
            "name" => "Pro"   
        ]);
        Category::create([
            "id" => 2,
            "name" => "Standard"   
        ]);
        Category::create([
            "id" => 3,
            "name" => "Basic"   
        ]);
        // Producer::create([
        //     "id" => 1,
        //     "name" => "UNKNOWN"   
        // ]);
        Producer::create([
            "id" => 1,
            "name" => "Dimplex"   
        ]);
        Producer::create([
            "id" => 2,
            "name" => "Hyunday"   
        ]);
        Producer::create([
            "id" => 3,
            "name" => "Buderus"   
        ]);
    }
}
