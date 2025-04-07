<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name' => 'GS ASTRA',
            'slug' => 'gs-astra'
        ]);

        Brand::create([
            'name' => 'YUASA YAMAHA',
            'slug' => 'yuasa-yamaha'
        ]);

        Brand::create([
            'name' => 'YUASA',
            'slug' => 'yuasa'
        ]);

        Brand::create([
            'name' => 'MASSIVE XP',
            'slug' => 'massive-xp'
        ]);

        Brand::create([
            'name' => 'INCOE',
            'slug' => 'incoe'
        ]);

        Brand::create([
            'name' => 'GS ASTRA HYBRID',
            'slug' => 'gs-astra-hybrid'
        ]);

        Brand::create([
            'name' => 'MOTOBATT',
            'slug' => 'motobatt'
        ]);

        Brand::create([
            'name' => 'GASHO',
            'slug' => 'gasho'
        ]);

        Brand::create([
            'name' => 'ASIMATEC',
            'slug' => 'asimatec'
        ]);

        Brand::create([
            'name' => 'MOTORCYCLE FIT',
            'slug' => 'motorcycle-fit'
        ]);

        Brand::create([
            'name' => 'UNOBATT',
            'slug' => 'unobatt'
        ]);

        Brand::create([
            'name' => 'THUNDER',
            'slug' => 'thunder'
        ]);
    }
}
