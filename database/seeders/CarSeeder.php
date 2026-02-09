<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run(): void
    {
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

        Car::create([
            'brand' => 'Ford',
            'model' => 'Everest',
            'year' => 2023,
            'color' => 'White',
            'price' => 2100000.00
        ]);

        Car::create([
            'brand' => 'Nissan',
            'model' => 'Navara',
            'year' => 2023,
            'color' => 'Orange',
            'price' => 1450000.00
        ]);

        Car::create([
            'brand' => 'Suzuki',
            'model' => 'Jimny',
            'year' => 2024,
            'color' => 'Jungle Green',
            'price' => 1300000.00
        ]);

        Car::create([
            'brand' => 'Hyundai',
            'model' => 'Stargazer',
            'year' => 2023,
            'color' => 'Grey',
            'price' => 1100000.00
        ]);

        Car::create([
            'brand' => 'Mazda',
            'model' => '3',
            'year' => 2024,
            'color' => 'Soul Red',
            'price' => 1600000.00
        ]);

        Car::create([
            'brand' => 'Toyota',
            'model' => 'Fortuner',
            'year' => 2023,
            'color' => 'Black',
            'price' => 2400000.00
        ]);

        Car::create([
            'brand' => 'Mitsubishi',
            'model' => 'Xpander',
            'year' => 2024,
            'color' => 'White',
            'price' => 1200000.00
        ]);

        Car::create([
            'brand' => 'Honda',
            'model' => 'CR-V',
            'year' => 2024,
            'color' => 'Blue',
            'price' => 2300000.00
        ]);

        Car::create([
            'brand' => 'Isuzu',
            'model' => 'D-Max',
            'year' => 2023,
            'color' => 'Silver',
            'price' => 1700000.00
        ]);

        Car::create([
            'brand' => 'Kia',
            'model' => 'Seltos',
            'year' => 2023,
            'color' => 'Yellow',
            'price' => 1250000.00
        ]);

        Car::create([
            'brand' => 'BMW',
            'model' => '318i',
            'year' => 2022,
            'color' => 'Alpine White',
            'price' => 3500000.00
        ]);

        Car::create([
            'brand' => 'Chevrolet',
            'model' => 'Tracker',
            'year' => 2023,
            'color' => 'Red',
            'price' => 1150000.00
        ]);
    }
}