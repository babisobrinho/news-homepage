<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'The Bright Future of Web 3.0?',
            'text' => 'We dive into the next evolution of the web that claims to put the power of the platforms back into the hands of the people. But is it really fulfilling its promise?',
            'category_id' => 1,
        ]);

        Article::create([
            'title' => 'New Hydrogen VS Electric Cars',
            'text' => 'Will hydrogen-fueled cars ever catch up to EVs?',
            'category_id' => 2,
        ]);

        Article::create([
            'title' => 'The Downsides of AI Artistry',
            'text' => 'What are the possible adverse effects of on-demand AI image generation?',
            'category_id' => 3,
        ]);

        Article::create([
            'title' => 'Is VC Funding Drying Up?',
            'text' => 'Private funding by VC firms is down 50% YOY. We take a look at what that means.',
            'category_id' => 4,
        ]);

        Article::create([
            'title' => 'Reviving Retro PCs',
            'text' => 'What happens when old PCs are given modern upgrades?',
            'category_id' => 1,
        ]);

        Article::create([
            'title' => 'Top 10 Laptops of 2022',
            'text' => 'Our best picks for various needs and budgets',
            'category_id' => 1,
        ]);

        Article::create([
            'title' => 'The Growth of Gaming',
            'text' => 'How the pandemic has sparked fresh opportunities.',
            'category_id' => 1,
        ]);
    }
}
