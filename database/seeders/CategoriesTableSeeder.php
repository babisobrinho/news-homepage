<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Technology & Innovation',
            'Health & Wellness',
            'Business & Finance',
            'Lifestyle & Culture',
            'Science & Environment',
            'Sports & Fitness',
            'Arts & Entertainment',
            'Education & Learning',
            'Food & Drink',
            'Travel & Adventure',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
