<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    public function run()
    {
        DB::table('cars')->insert([
            [
                'name' => 'Porsche 911 Dakar',
                'image_url' => 'https://files.hollmann.international/vehicle/23G1159/images/compact/1.jpeg',
                'gross_price' => '€416,262.00',
                'net_price' => '€349,800.00',
                'drive' => 'Petrol',
                'fuel_consumption' => '11.3 l/100 km*',
                'co2_emissions' => '256 g/km*',
                'co2_efficiency_rating' => 'G',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add other cars data here...
        ]);
    }
}
