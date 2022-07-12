<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
