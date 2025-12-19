<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Product::insert([
            [
                'name' => 'Semen Portland Tiga Roda 50kg',
                'image' => null,
                'color' => 'Abu-abu',
                'category' => 'Semen',
                'type' => 'Material Bangunan',
                'price' => 65000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cat Tembok Dulux Interior 5kg',
                'image' => null,
                'color' => 'Putih',
                'category' => 'Cat',
                'type' => 'Interior',
                'price' => 180000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Besi Beton Ulir 10mm',
                'image' => null,
                'color' => 'Hitam',
                'category' => 'Besi',
                'type' => 'Konstruksi',
                'price' => 85000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Keramik Lantai 40x40',
                'image' => null,
                'color' => 'Putih',
                'category' => 'Keramik',
                'type' => 'Lantai',
                'price' => 55000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Engsel Pintu Stainless',
                'image' => null,
                'color' => 'Silver',
                'category' => 'Hardware',
                'type' => 'Aksesoris',
                'price' => 30000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
