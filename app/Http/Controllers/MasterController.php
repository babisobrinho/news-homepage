<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class MasterController extends Controller
{
    public function home() {

        $latestArticles = Article::latest()->take(3)->get();

        return view('home', [
            'latestArticles' => $latestArticles,
        ]);
    }

    public function categories() {

        return view('categories');

    }
}
