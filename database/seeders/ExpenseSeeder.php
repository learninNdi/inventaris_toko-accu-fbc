<?php

namespace Database\Seeders;

use App\Models\Expense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Expense::create([
            'description' => 'Tes tambah deskripsi 1',
            'nominal' => 50000,
        ]);

        Expense::create([
            'description' => 'Tes tambah deskripsi 2',
            'nominal' => 5000,
        ]);

        Expense::create([
            'description' => 'Tes tambah deskripsi 3',
            'nominal' => 50000,
        ]);

        Expense::create([
            'description' => 'Tes tambah deskripsi 4',
            'nominal' => 50000,
        ]);

        Expense::create([
            'description' => 'Tes tambah deskripsi 5',
            'nominal' => 55000,
        ]);

        Expense::create([
            'description' => 'Tes tambah deskripsi 6',
            'nominal' => 65000,
        ]);

        Expense::create([
            'description' => 'Tes tambah deskripsi 7',
            'nominal' => 5000,
        ]);

        Expense::create([
            'description' => 'Tes tambah deskripsi 8',
            'nominal' => 10000,
        ]);

        Expense::create([
            'description' => 'Tes tambah deskripsi 9',
            'nominal' => 20000,
        ]);

        Expense::create([
            'description' => 'Tes tambah deskripsi 10',
            'nominal' => 50000,
        ]);

        Expense::create([
            'description' => 'Tes tambah deskripsi 11',
            'nominal' => 50000,
        ]);

        Expense::create([
            'description' => 'Tes tambah deskripsi 12',
            'nominal' => 50000,
        ]);
    }
}
