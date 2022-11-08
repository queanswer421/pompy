<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Administrator;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrator::create([
            "name" => "Łukasz",
            "email" => "admin@pompa.pl" ,
            "password" => bcrypt("password")  
        ]);
    }
}
