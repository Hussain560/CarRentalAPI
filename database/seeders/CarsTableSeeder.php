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
            ['brand' => 'Toyota', 'model' => 'Camry', 'category' => 'Sedan', 'price_per_day' => 75.00],
            ['brand' => 'Honda', 'model' => 'Civic', 'category' => 'Sedan', 'price_per_day' => 65.00],
            ['brand' => 'Ford', 'model' => 'Mustang', 'category' => 'Sports', 'price_per_day' => 150.00],
            ['brand' => 'BMW', 'model' => '3 Series', 'category' => 'Luxury Sedan', 'price_per_day' => 175.00],
            ['brand' => 'Mercedes', 'model' => 'C-Class', 'category' => 'Luxury Sedan', 'price_per_day' => 185.00],
            ['brand' => 'Audi', 'model' => 'A4', 'category' => 'Luxury Sedan', 'price_per_day' => 170.00],
            ['brand' => 'Chevrolet', 'model' => 'Malibu', 'category' => 'Sedan', 'price_per_day' => 70.00],
            ['brand' => 'Nissan', 'model' => 'Altima', 'category' => 'Sedan', 'price_per_day' => 68.00],
            ['brand' => 'Hyundai', 'model' => 'Sonata', 'category' => 'Sedan', 'price_per_day' => 60.00],
            ['brand' => 'Kia', 'model' => 'Optima', 'category' => 'Sedan', 'price_per_day' => 58.00],
            ['brand' => 'Volkswagen', 'model' => 'Passat', 'category' => 'Sedan', 'price_per_day' => 80.00],
            ['brand' => 'Mazda', 'model' => 'Mazda6', 'category' => 'Sedan', 'price_per_day' => 72.00],
            ['brand' => 'Lexus', 'model' => 'ES', 'category' => 'Luxury Sedan', 'price_per_day' => 165.00],
            ['brand' => 'Infiniti', 'model' => 'Q50', 'category' => 'Luxury Sedan', 'price_per_day' => 155.00],
            ['brand' => 'Acura', 'model' => 'TLX', 'category' => 'Luxury Sedan', 'price_per_day' => 145.00],
            ['brand' => 'Tesla', 'model' => 'Model 3', 'category' => 'Electric', 'price_per_day' => 200.00],
            ['brand' => 'Subaru', 'model' => 'Legacy', 'category' => 'Sedan', 'price_per_day' => 75.00],
            ['brand' => 'Chrysler', 'model' => '300', 'category' => 'Luxury Sedan', 'price_per_day' => 95.00],
            ['brand' => 'Dodge', 'model' => 'Charger', 'category' => 'Sports', 'price_per_day' => 120.00],
            ['brand' => 'Porsche', 'model' => 'Panamera', 'category' => 'Luxury Sports', 'price_per_day' => 195.00],
            ['brand' => 'Toyota', 'model' => 'Corolla', 'category' => 'Compact', 'price_per_day' => 55.00],
            ['brand' => 'Honda', 'model' => 'Accord', 'category' => 'Sedan', 'price_per_day' => 78.00],
            ['brand' => 'BMW', 'model' => '5 Series', 'category' => 'Luxury Sedan', 'price_per_day' => 190.00],
            ['brand' => 'Mercedes', 'model' => 'E-Class', 'category' => 'Luxury Sedan', 'price_per_day' => 195.00],
            ['brand' => 'Audi', 'model' => 'A6', 'category' => 'Luxury Sedan', 'price_per_day' => 185.00],
        ];

        foreach ($cars as $car) {
            Car::create([
                'brand' => $car['brand'],
                'model' => $car['model'],
                'category' => $car['category'],
                'price_per_day' => $car['price_per_day'],
                'is_available' => rand(0, 1) == 1, // Randomly set availability
            ]);
        }
    }
}
