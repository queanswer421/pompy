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
        $this->call([
            CategorySeeder::class,
            TypeSeeder::class,
            ProducerSeeder::class,
            PumpSeeder::class,
            // AdministratorSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
        \App\Models\Administrator::factory(1)->create();
        \App\Models\Company::factory(1)->create();
        \App\Models\Manager::factory(1)->create();
        \App\Models\Employer::factory(1)->create();


    }
}
