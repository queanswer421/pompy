<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producer;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
