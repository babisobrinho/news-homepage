<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class MasterController extends Controller
{
    public function home() {

        $techArticles = Article::where('category_id', 1)->latest()->limit(3)->get();
        $categories = Category::all();
        $highlightedArticle = Article::latest()->first();
        
        $newArticles = Article::latest()->take(4)->get()->reject(function ($article) use ($highlightedArticle) {
            return $article->id === $highlightedArticle->id;
        });
        

        return view('home', [
            'newArticles' => $newArticles,
            'techArticles' => $techArticles,
            'categories' => $categories,
            'highlightedArticle' => $highlightedArticle,
        ]);
    }

    public function categories()
    {
        $categories = Category::all();
        
        return view('categories', ['categories' => $categories]);
    }

}
