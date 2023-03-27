<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Article;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Babi Sobrinho',
            'email' => 'babi@example.com',
            'password' => Hash::make('123456'),
        ]);

        Article::create([
            'title' => 'The Growth of Gaming',
            'text' => 'How the pandemic has sparked fresh opportunities.',
            'image' => 'articles-images/article1.jpg',
            'category_id' => 1,
            'user_id' => 1,
            'created_at' => '2023-03-27 10:00:01',
            'updated_at' => '2023-03-27 10:00:01',
        ]);

        Article::create([
            'title' => 'Top 10 Laptops of 2022',
            'text' => 'Our best picks for various needs and budgets',
            'image' => 'articles-images/article2.jpg',
            'category_id' => 1,
            'user_id' => 1,
            'created_at' => '2023-03-27 10:00:02',
            'updated_at' => '2023-03-27 10:00:02',
        ]);

        Article::create([
            'title' => 'Reviving Retro PCs',
            'text' => 'What happens when old PCs are given modern upgrades?',
            'image' => 'articles-images/article3.jpg',
            'category_id' => 1,
            'user_id' => 1,
            'created_at' => '2023-03-27 10:00:03',
            'updated_at' => '2023-03-27 10:00:03',
        ]);

        Article::create([
            'title' => 'Is VC Funding Drying Up?',
            'text' => 'Private funding by VC firms is down 50% YOY. We take a look at what that means.',
            'category_id' => 4,
            'user_id' => 1,
            'created_at' => '2023-03-27 10:00:04',
            'updated_at' => '2023-03-27 10:00:04',
        ]);

        Article::create([
            'title' => 'The Downsides of AI Artistry',
            'text' => 'What are the possible adverse effects of on-demand AI image generation?',
            'category_id' => 3,
            'user_id' => 1,
            'created_at' => '2023-03-27 10:00:05',
            'updated_at' => '2023-03-27 10:00:05',
        ]);

        Article::create([
            'title' => 'New Hydrogen VS Electric Cars',
            'text' => 'Will hydrogen-fueled cars ever catch up to EVs?',
            'category_id' => 2,
            'user_id' => 1,
            'created_at' => '2023-03-27 10:00:06',
            'updated_at' => '2023-03-27 10:00:06',
        ]);

        Article::create([
            'title' => 'The Bright Future of Web 3.0?',
            'text' => 'We dive into the next evolution of the web that claims to put the power of the platforms back into the hands of the people. But is it really fulfilling its promise?',
            'image' => 'articles-images/article7.jpg',
            'category_id' => 1,
            'user_id' => 1,
            'created_at' => '2023-03-27 10:00:07',
            'updated_at' => '2023-03-27 10:00:07',
        ]);
    }
}
