<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categs = [
            [
                'name' => 'Canned Goods',
                'description' => 'All types of canned goods except canned dairy products'
            ],
            [
                'name' => 'Noodles',
                'description' => 'All types of instant noodles, pancit cantons and similar products'
            ],
            [
                'name' => 'Beverages',
                'description' => 'Non-alcoholic drinks'
            ],
            [
                'name' => 'Wines & Spirits',
                'description' => 'All alcoholic drinks and similar products'
            ],
            [
                'name' => 'Fruits & Vegetables',
                'description' => 'All plant based products'
            ]
        ];
        
        foreach($categs as $cat) {
            Category::create($cat);
        }
    }
}
