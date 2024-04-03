<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'White',
            'Black',
            'Red',
            'Green',
            'Blue',
            'Yellow',
            'Gray',
            'Pink',
            'Purple',
            'Gold',
        ];

        foreach ($objs as $obj) {
            Category::create([
                'name' => $obj,
            ]);
        };
    }
}
