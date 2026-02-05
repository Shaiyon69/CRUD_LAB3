<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        //fake data for cars
        Car::truncate();

        Car::create([
            'brand' => 'Toyota',
            'model' => 'Vios',
            'year' => 2023,
            'color' => 'Red',
            'price' => 850000.00
        ]);

        Car::create([
            'brand' => 'Honda',
            'model' => 'Civic',
            'year' => 2024,
            'color' => 'Black',
            'price' => 1500000.00
        ]);

        Car::create([
            'brand' => 'Mitsubishi',
            'model' => 'Mirage',
            'year' => 2022,
            'color' => 'Silver',
            'price' => 600000.00
        ]);
    }
}
