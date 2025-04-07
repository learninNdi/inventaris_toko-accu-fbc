<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'GTZ5S',
            'slug' => 'gtz5s'
        ]);

        Type::create([
            'name' => 'GTZ6V',
            'slug' => 'gtz6v'
        ]);

        Type::create([
            'name' => 'GTZ7S',
            'slug' => 'gtz7s'
        ]);

        Type::create([
            'name' => 'GTZ7V',
            'slug' => 'gtz7v'
        ]);

        Type::create([
            'name' => 'YTX7L',
            'slug' => 'ytx7l'
        ]);

        Type::create([
            'name' => 'YTX9',
            'slug' => 'ytx9'
        ]);

        Type::create([
            'name' => 'GM7-4B',
            'slug' => 'gm7-4b'
        ]);

        Type::create([
            'name' => 'GM9',
            'slug' => 'gm9'
        ]);

        Type::create([
            'name' => '12N10-3B',
            'slug' => '12n10-3b'
        ]);

        Type::create([
            'name' => 'GM5Z-3B',
            'slug' => 'gm5z-3b'
        ]);

        Type::create([
            'name' => 'MTX3L',
            'slug' => 'mtx3l'
        ]);

        Type::create([
            'name' => 'MTX7A',
            'slug' => 'mtx7a'
        ]);

        Type::create([
            'name' => 'GTZ8V',
            'slug' => 'gtz8v'
        ]);
    }
}
