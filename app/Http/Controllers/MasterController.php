<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class MasterController extends Controller
{
    public function home() {

        $newArticles = Article::latest()->take(3)->get();
        $techArticles = Article::where('category_id', 1)->latest()->limit(3)->get();
        $categories = Category::all();

        return view('home', [
            'newArticles' => $newArticles,
            'techArticles' => $techArticles,
            'categories' => $categories,
        ]);
    }

    public function categories() {

        return view('categories');

    }
}
