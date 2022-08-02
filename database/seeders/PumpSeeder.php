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
                'm20' => 2.38            ,
                'm15' => 2.97,
                'm7' => 4,
                'p2' => 5.1,
                'p7' => 6.4,
                'p10' => 6.7,
                'p12' => 7,
                'p20' => 8.04
            ]);
            DB::table('heat45s')->insert([
                'pump_id' => 1,
                'm20' => 2.28,
                'm15' => 2.83,
                'm7' => 3.76,
                'p2' => 4.84,
                'p7' => 6.1,
                'p10' => 6.3,
                'p12' => 6.4,
                'p20' => 7.67
            ]);
            DB::table('heat55s')->insert([
                'pump_id' => 1,
                // 'm20' => null,
                // 'm15' => ,
                'm7' => 3.61,
                'p2' => 4.66,
                'p7' => 5.68,
                'p10' => 6,
                'p12' => 6.2,
                'p20' => 7.29
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
                'm20' => 2.96,
                'm15' => 3.73,
                'm7' => 5.5,
                'p2' => 7.2,
                'p7' => 8.4,
                'p10' => 8.9,
                'p12' => 11.45,
                'p20' => 12.7
            ]);
            DB::table('heat45s')->insert([
                'pump_id' => 2,
                'm20' => 2.26,
                'm15' => 3.15,
                'm7' => 4.56,
                'p2' => 6.53,
                'p7' => 8.2,
                'p10' => 8.88,
                'p12' => 10.29,
                'p20' => 11.7
            ]);
            DB::table('heat55s')->insert([
                'pump_id' => 2,
                // 'm20' => null,
                // 'm15' => ,
                'm7' => 3.98,
                'p2' => 5.88,
                'p7' => 8,
                'p10' => 7.81,
                'p12' => 9.11,
                'p20' => 10.4
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
                'm20' => 4.89,
                'm15' => 5.87,
                'm7' => 7.3,
                'p2' => 9.5,
                'p7' => 11.3,
                'p10' => 12,
                'p12' => 12.2,
                'p20' => 13.6
            ]);
            DB::table('heat45s')->insert([
                'pump_id' => 3,
                'm20' => 4.7,
                'm15' => 5.7,
                'm7' => 7.35,
                'p2' => 9.1,
                'p7' => 10.8,
                'p10' => 11.2,
                'p12' => 11.4,
                'p20' => 12.8
            ]);
            DB::table('heat55s')->insert([
                'pump_id' => 3,
                'm20' => 4.5,
                'm15' => 5.5,
                'm7' => 7.17,
                'p2' => 8.8,
                'p7' => 10,
                'p10' => 10.6,
                'p12' => 10.9,
                'p20' => 12.39
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
                'm20' => 7.06,
                'm15' => 8.38,
                'm7' => 10.6,
                'p2' => 12.3,
                'p7' => 8.4,
                // 'p10' => 8.4,
                'p12' => 11,
                'p20' => 13
            ]);
            DB::table('heat45s')->insert([
                'pump_id' => 4,
                'm20' => 6.65,
                'm15' => 8.05,
                'm7' => 10.75,
                'p2' => 14.5,
                'p7' => 10.8,
                // 'p10' => 11.2,
                'p12' => 10.5,
                'p20' => 12.5
            ]);
            DB::table('heat55s')->insert([
                'pump_id' => 4,
                'm20' => 6.3,
                'm15' => 7.7,
                'm7' => 10.4,
                'p2' => 14.2,
                'p7' => 9.2,
                // 'p10' => 10.6,
                'p12' => 10.1,
                'p20' => 12
            ]);
// BASIC
Pump::create([
    'producer_id' => 2,
    'line' => 'LA', 
    'model' => 'LA 6S-TUR',
    'power' => 6, 
    'category_id' => 3, 
    'type' => 1, 
    'volume' => 56, 
    'price' => 41890 
]);
    DB::table('heat35s')->insert([
        'pump_id' => 5,
        'm20' => 2.38            ,
        'm15' => 2.97,
        'm7' => 4,
        'p2' => 5.1,
        'p7' => 6.4,
        'p10' => 6.7,
        'p12' => 7,
        'p20' => 8.04
    ]);
    DB::table('heat45s')->insert([
        'pump_id' => 5,
        'm20' => 2.28,
        'm15' => 2.83,
        'm7' => 3.76,
        'p2' => 4.84,
        'p7' => 6.1,
        'p10' => 6.3,
        'p12' => 6.4,
        'p20' => 7.67
    ]);
    DB::table('heat55s')->insert([
        'pump_id' => 5,
        // 'm20' => null,
        // 'm15' => ,
        'm7' => 3.61,
        'p2' => 4.66,
        'p7' => 5.68,
        'p10' => 6,
        'p12' => 6.2,
        'p20' => 7.29
    ]);
Pump::create([
    'producer_id' => 2,
    'line' => 'LA', 
    'model' => 'LA 9S-TUR',
    'power' => 9, 
    'category_id' => 3, 
    'type' => 1, 
    'volume' => 57, 
    'price' => 48290 
]);
    DB::table('heat35s')->insert([
        'pump_id' => 6,
        'm20' => 2.96,
        'm15' => 3.73,
        'm7' => 5.5,
        'p2' => 7.2,
        'p7' => 8.4,
        'p10' => 8.9,
        'p12' => 11.45,
        'p20' => 12.7
    ]);
    DB::table('heat45s')->insert([
        'pump_id' => 6,
        'm20' => 2.26,
        'm15' => 3.15,
        'm7' => 4.56,
        'p2' => 6.53,
        'p7' => 8.2,
        'p10' => 8.88,
        'p12' => 10.29,
        'p20' => 11.7
    ]);
    DB::table('heat55s')->insert([
        'pump_id' => 6,
        // 'm20' => null,
        // 'm15' => ,
        'm7' => 3.98,
        'p2' => 5.88,
        'p7' => 8,
        'p10' => 7.81,
        'p12' => 9.11,
        'p20' => 10.4
    ]);
Pump::create([
    'producer_id' => 2,
    'line' => 'LA', 
    'model' => 'LA 12S-TUR',
    'power' => 12, 
    'category_id' => 3, 
    'type' => 1, 
    'volume' => 54, 
    'price' => 51790 
]);
    DB::table('heat35s')->insert([
        'pump_id' => 7,
        'm20' => 4.89,
        'm15' => 5.87,
        'm7' => 7.3,
        'p2' => 9.5,
        'p7' => 11.3,
        'p10' => 12,
        'p12' => 12.2,
        'p20' => 13.6
    ]);
    DB::table('heat45s')->insert([
        'pump_id' => 7,
        'm20' => 4.7,
        'm15' => 5.7,
        'm7' => 7.35,
        'p2' => 9.1,
        'p7' => 10.8,
        'p10' => 11.2,
        'p12' => 11.4,
        'p20' => 12.8
    ]);
    DB::table('heat55s')->insert([
        'pump_id' => 7,
        'm20' => 4.5,
        'm15' => 5.5,
        'm7' => 7.17,
        'p2' => 8.8,
        'p7' => 10,
        'p10' => 10.6,
        'p12' => 10.9,
        'p20' => 12.39
    ]);
Pump::create([
    'producer_id' => 2,
    'line' => 'LA', 
    'model' => 'LA 18S-TUR',
    'power' => 18, 
    'category_id' => 3, 
    'type' => 1, 
    'volume' => 54, 
    'price' => 57790 
]);
    DB::table('heat35s')->insert([
        'pump_id' => 8,
        'm20' => 7.06,
        'm15' => 8.38,
        'm7' => 10.6,
        'p2' => 12.3,
        'p7' => 8.4,
        // 'p10' => 8.4,
        'p12' => 11,
        'p20' => 13
    ]);
    DB::table('heat45s')->insert([
        'pump_id' => 8,
        'm20' => 6.65,
        'm15' => 8.05,
        'm7' => 10.75,
        'p2' => 14.5,
        'p7' => 10.8,
        // 'p10' => 11.2,
        'p12' => 10.5,
        'p20' => 12.5
    ]);
    DB::table('heat55s')->insert([
        'pump_id' => 8,
        'm20' => 6.3,
        'm15' => 7.7,
        'm7' => 10.4,
        'p2' => 14.2,
        'p7' => 9.2,
        // 'p10' => 10.6,
        'p12' => 10.1,
        'p20' => 12
    ]);

    // PRO
Pump::create([
    'producer_id' => 3,
    'line' => 'LA', 
    'model' => 'LA 6S-TUR',
    'power' => 6, 
    'category_id' => 1, 
    'type' => 1, 
    'volume' => 56, 
    'price' => 41890 
]);
    DB::table('heat35s')->insert([
        'pump_id' => 9,
        'm20' => 2.38            ,
        'm15' => 2.97,
        'm7' => 4,
        'p2' => 5.1,
        'p7' => 6.4,
        'p10' => 6.7,
        'p12' => 7,
        'p20' => 8.04
    ]);
    DB::table('heat45s')->insert([
        'pump_id' => 9,
        'm20' => 2.28,
        'm15' => 2.83,
        'm7' => 3.76,
        'p2' => 4.84,
        'p7' => 6.1,
        'p10' => 6.3,
        'p12' => 6.4,
        'p20' => 7.67
    ]);
    DB::table('heat55s')->insert([
        'pump_id' => 9,
        // 'm20' => null,
        // 'm15' => ,
        'm7' => 3.61,
        'p2' => 4.66,
        'p7' => 5.68,
        'p10' => 6,
        'p12' => 6.2,
        'p20' => 7.29
    ]);
Pump::create([
    'producer_id' => 3,
    'line' => 'LA', 
    'model' => 'LA 9S-TUR',
    'power' => 9, 
    'category_id' => 1, 
    'type' => 1, 
    'volume' => 57, 
    'price' => 48290 
]);
    DB::table('heat35s')->insert([
        'pump_id' => 10,
        'm20' => 2.96,
        'm15' => 3.73,
        'm7' => 5.5,
        'p2' => 7.2,
        'p7' => 8.4,
        'p10' => 8.9,
        'p12' => 11.45,
        'p20' => 12.7
    ]);
    DB::table('heat45s')->insert([
        'pump_id' => 10,
        'm20' => 2.26,
        'm15' => 3.15,
        'm7' => 4.56,
        'p2' => 6.53,
        'p7' => 8.2,
        'p10' => 8.88,
        'p12' => 10.29,
        'p20' => 11.7
    ]);
    DB::table('heat55s')->insert([
        'pump_id' => 10,
        // 'm20' => null,
        // 'm15' => ,
        'm7' => 3.98,
        'p2' => 5.88,
        'p7' => 8,
        'p10' => 7.81,
        'p12' => 9.11,
        'p20' => 10.4
    ]);
Pump::create([
    'producer_id' => 3,
    'line' => 'LA', 
    'model' => 'LA 12S-TUR',
    'power' => 12, 
    'category_id' => 1, 
    'type' => 1, 
    'volume' => 54, 
    'price' => 51790 
]);
    DB::table('heat35s')->insert([
        'pump_id' => 11,
        'm20' => 4.89,
        'm15' => 5.87,
        'm7' => 7.3,
        'p2' => 9.5,
        'p7' => 11.3,
        'p10' => 12,
        'p12' => 12.2,
        'p20' => 13.6
    ]);
    DB::table('heat45s')->insert([
        'pump_id' => 11,
        'm20' => 4.7,
        'm15' => 5.7,
        'm7' => 7.35,
        'p2' => 9.1,
        'p7' => 10.8,
        'p10' => 11.2,
        'p12' => 11.4,
        'p20' => 12.8
    ]);
    DB::table('heat55s')->insert([
        'pump_id' => 11,
        'm20' => 4.5,
        'm15' => 5.5,
        'm7' => 7.17,
        'p2' => 8.8,
        'p7' => 10,
        'p10' => 10.6,
        'p12' => 10.9,
        'p20' => 12.39
    ]);
Pump::create([
    'producer_id' => 3,
    'line' => 'LA', 
    'model' => 'LA 18S-TUR',
    'power' => 18, 
    'category_id' => 1, 
    'type' => 1, 
    'volume' => 54, 
    'price' => 57790 
]);
    DB::table('heat35s')->insert([
        'pump_id' => 12,
        'm20' => 7.06,
        'm15' => 8.38,
        'm7' => 10.6,
        'p2' => 12.3,
        'p7' => 8.4,
        // 'p10' => 8.4,
        'p12' => 11,
        'p20' => 13
    ]);
    DB::table('heat45s')->insert([
        'pump_id' => 12,
        'm20' => 6.65,
        'm15' => 8.05,
        'm7' => 10.75,
        'p2' => 14.5,
        'p7' => 10.8,
        // 'p10' => 11.2,
        'p12' => 10.5,
        'p20' => 12.5
    ]);
    DB::table('heat55s')->insert([
        'pump_id' => 12,
        'm20' => 6.3,
        'm15' => 7.7,
        'm7' => 10.4,
        'p2' => 14.2,
        'p7' => 9.2,
        // 'p10' => 10.6,
        'p12' => 10.1,
        'p20' => 12
    ]);
    }
}
