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
        Product::create([
            'name' => 'GTZ5S MF GS ASTRA',
            'price' => 225000,
            'stock' => 10,
            'type_id' => 1,
            'category_id' => 2,
            'brand_id' => 1,
            'vehicle_id' => 2,
        ]);
    }
}
