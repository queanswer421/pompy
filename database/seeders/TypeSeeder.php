<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            "id" => 1,
            "name" => "Monoblok"   
        ]);
        Type::create([
            "id" => 2,
            "name" => "Split"   
        ]);
    }
}
