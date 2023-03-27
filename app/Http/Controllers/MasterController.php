<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class MasterController extends Controller
{
    public function home() {
        
        $categories = Category::all();
        $highlightedArticle = Article::latest()->first();
        
        $newArticles = Article::latest()->take(4)->get()->reject(function ($article) use ($highlightedArticle) {
            return $article->id === $highlightedArticle->id;
        });

        $techArticlesQuery = Article::where('category_id', 1)->latest()->take(3);

        if ($highlightedArticle->category_id === 1) {
            $techArticlesQuery->where('id', '!=', $highlightedArticle->id);
        }

        $techArticles = $techArticlesQuery->get();
        

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
