<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            ['brand' => 'Toyota', 'model' => 'Camry', 'price_per_day' => 75.00],
            ['brand' => 'Honda', 'model' => 'Civic', 'price_per_day' => 65.00],
            ['brand' => 'Ford', 'model' => 'Mustang', 'price_per_day' => 150.00],
            ['brand' => 'BMW', 'model' => '3 Series', 'price_per_day' => 175.00],
            ['brand' => 'Mercedes', 'model' => 'C-Class', 'price_per_day' => 185.00],
            ['brand' => 'Audi', 'model' => 'A4', 'price_per_day' => 170.00],
            ['brand' => 'Chevrolet', 'model' => 'Malibu', 'price_per_day' => 70.00],
            ['brand' => 'Nissan', 'model' => 'Altima', 'price_per_day' => 68.00],
            ['brand' => 'Hyundai', 'model' => 'Sonata', 'price_per_day' => 60.00],
            ['brand' => 'Kia', 'model' => 'Optima', 'price_per_day' => 58.00],
            ['brand' => 'Volkswagen', 'model' => 'Passat', 'price_per_day' => 80.00],
            ['brand' => 'Mazda', 'model' => 'Mazda6', 'price_per_day' => 72.00],
            ['brand' => 'Lexus', 'model' => 'ES', 'price_per_day' => 165.00],
            ['brand' => 'Infiniti', 'model' => 'Q50', 'price_per_day' => 155.00],
            ['brand' => 'Acura', 'model' => 'TLX', 'price_per_day' => 145.00],
            ['brand' => 'Tesla', 'model' => 'Model 3', 'price_per_day' => 200.00],
            ['brand' => 'Subaru', 'model' => 'Legacy', 'price_per_day' => 75.00],
            ['brand' => 'Chrysler', 'model' => '300', 'price_per_day' => 95.00],
            ['brand' => 'Dodge', 'model' => 'Charger', 'price_per_day' => 120.00],
            ['brand' => 'Porsche', 'model' => 'Panamera', 'price_per_day' => 195.00],
            ['brand' => 'Toyota', 'model' => 'Corolla', 'price_per_day' => 55.00],
            ['brand' => 'Honda', 'model' => 'Accord', 'price_per_day' => 78.00],
            ['brand' => 'BMW', 'model' => '5 Series', 'price_per_day' => 190.00],
            ['brand' => 'Mercedes', 'model' => 'E-Class', 'price_per_day' => 195.00],
            ['brand' => 'Audi', 'model' => 'A6', 'price_per_day' => 185.00],
        ];

        foreach ($cars as $car) {
            Car::create([
                'brand' => $car['brand'],
                'model' => $car['model'],
                'price_per_day' => $car['price_per_day'],
                'is_available' => rand(0, 1) == 1, // Randomly set availability
            ]);
        }
    }
}
