<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pump;
use Illuminate\Support\Facades\DB;

class PumpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pump::create([
            'producer_id' => 1,
            'line' => 'LA', 
            'model' => 'LA 6S-TUR',
            'power' => 6, 
            'category_id' => 2, 
            'type' => 1, 
            'volume' => 56, 
            'price' => 41890 
        ]);
            DB::table('heat35s')->insert([
                'pump_id' => 1,
                'p35m20' => 2.38            ,
                'p35m15' => 2.97,
                'p35m7' => 4,
                'p35p2' => 5.1,
                'p35p7' => 6.4,
                'p35p10' => 6.7,
                'p35p12' => 7,
                'p35p20' => 8.04
            ]);
            DB::table('heat45s')->insert([
                'pump_id' => 1,
                'p45m20' => 2.28,
                'p45m15' => 2.83,
                'p45m7' => 3.76,
                'p45p2' => 4.84,
                'p45p7' => 6.1,
                'p45p10' => 6.3,
                'p45p12' => 6.4,
                'p45p20' => 7.67
            ]);
            DB::table('heat55s')->insert([
                'pump_id' => 1,
                // 'p55m20' => null,
                // 'p55m15' => ,
                'p55m7' => 3.61,
                'p55p2' => 4.66,
                'p55p7' => 5.68,
                'p55p10' => 6,
                'p55p12' => 6.2,
                'p55p20' => 7.29
            ]);
        Pump::create([
            'producer_id' => 1,
            'line' => 'LA', 
            'model' => 'LA 9S-TUR',
            'power' => 9, 
            'category_id' => 2, 
            'type' => 1, 
            'volume' => 57, 
            'price' => 48290 
        ]);
            DB::table('heat35s')->insert([
                'pump_id' => 2,
                'p35m20' => 2.96,
                'p35m15' => 3.73,
                'p35m7' => 5.5,
                'p35p2' => 7.2,
                'p35p7' => 8.4,
                'p35p10' => 8.9,
                'p35p12' => 11.45,
                'p35p20' => 12.7
            ]);
            DB::table('heat45s')->insert([
                'pump_id' => 2,
                'p45m20' => 2.26,
                'p45m15' => 3.15,
                'p45m7' => 4.56,
                'p45p2' => 6.53,
                'p45p7' => 8.2,
                'p45p10' => 8.88,
                'p45p12' => 10.29,
                'p45p20' => 11.7
            ]);
            DB::table('heat55s')->insert([
                'pump_id' => 2,
                // 'p55m20' => null,
                // 'p55m15' => ,
                'p55m7' => 3.98,
                'p55p2' => 5.88,
                'p55p7' => 8,
                'p55p10' => 7.81,
                'p55p12' => 9.11,
                'p55p20' => 10.4
            ]);
        Pump::create([
            'producer_id' => 1,
            'line' => 'LA', 
            'model' => 'LA 12S-TUR',
            'power' => 12, 
            'category_id' => 2, 
            'type' => 1, 
            'volume' => 54, 
            'price' => 51790 
        ]);
            DB::table('heat35s')->insert([
                'pump_id' => 3,
                'p35m20' => 4.89,
                'p35m15' => 5.87,
                'p35m7' => 7.3,
                'p35p2' => 9.5,
                'p35p7' => 11.3,
                'p35p10' => 12,
                'p35p12' => 12.2,
                'p35p20' => 13.6
            ]);
            DB::table('heat45s')->insert([
                'pump_id' => 3,
                'p45m20' => 4.7,
                'p45m15' => 5.7,
                'p45m7' => 7.35,
                'p45p2' => 9.1,
                'p45p7' => 10.8,
                'p45p10' => 11.2,
                'p45p12' => 11.4,
                'p45p20' => 12.8
            ]);
            DB::table('heat55s')->insert([
                'pump_id' => 3,
                'p55m20' => 4.5,
                'p55m15' => 5.5,
                'p55m7' => 7.17,
                'p55p2' => 8.8,
                'p55p7' => 10,
                'p55p10' => 10.6,
                'p55p12' => 10.9,
                'p55p20' => 12.39
            ]);
        Pump::create([
            'producer_id' => 1,
            'line' => 'LA', 
            'model' => 'LA 18S-TUR',
            'power' => 18, 
            'category_id' => 2, 
            'type' => 1, 
            'volume' => 54, 
            'price' => 57790 
        ]);
            DB::table('heat35s')->insert([
                'pump_id' => 4,
                'p35m20' => 7.06,
                'p35m15' => 8.38,
                'p35m7' => 10.6,
                'p35p2' => 12.3,
                'p35p7' => 8.4,
                // 'p35p10' => 8.4,
                'p35p12' => 11,
                'p35p20' => 13
            ]);
            DB::table('heat45s')->insert([
                'pump_id' => 4,
                'p45m20' => 6.65,
                'p45m15' => 8.05,
                'p45m7' => 10.75,
                'p45p2' => 14.5,
                'p45p7' => 10.8,
                // 'p45p10' => 11.2,
                'p45p12' => 10.5,
                'p45p20' => 12.5
            ]);
            DB::table('heat55s')->insert([
                'pump_id' => 4,
                'p55m20' => 6.3,
                'p55m15' => 7.7,
                'p55m7' => 10.4,
                'p55p2' => 14.2,
                'p55p7' => 9.2,
                // 'p55p10' => 10.6,
                'p55p12' => 10.1,
                'p55p20' => 12
            ]);
    }
}
