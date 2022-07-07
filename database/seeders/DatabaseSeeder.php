<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        App\Models\Category::create([
            'id' =>  1
            'name' => 'Pro',
        ]);
        App\Models\Category::create([
            'id' =>  2
            'name' => 'Standard',
        ]);
        App\Models\Category::create([
            'id' =>  3
            'name' => 'Basic',
        ]);
    }
}
