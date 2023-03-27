<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleFormRequest;
use App\Models\Article;
use App\Models\Category;
use App\Policies\ArticlePolicy;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\MasterController;

class ArticleController extends Controller
{

    public function index()
    {
        return app(MasterController::class)->home([
            'newArticles' => $newArticles,
            'techArticles' => $techArticles,
            'categories' => $categories,
            'highlightedArticle' => $highlightedArticle,
        ]);
    }

    public function list()
    {
        $articles = Article::with(['category', 'user'])->latest()->get();

        return view('articles.list', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $article = new Article();

        return view('articles.create', compact('categories', 'article'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleFormRequest $request)
    {
        $validated = $request->validated();
    
        $article = $request->user()->articles()->create($validated);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->storeAs(
                'public/articles-images',
                'article' . $article->id . '.' . $request->file('image')->getClientOriginalExtension()
            );
            $article->image = str_replace('public/', '', $imagePath);
            $article->save();
        }

        return redirect()
            ->route('articles.show', [$article]) // show article page
            ->with('success', 'You created a new article!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', [
            'article' => $article,
            'categoryName' => $article->category->name,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $this->authorize('update', $article);

        $imageUrl = $article->image ? asset('storage/'.$article->image) : null;

        $categories = Category::all();

        return view('articles.edit', ['article' => $article, 'imageUrl' => $imageUrl, 'categories' => $categories]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleFormRequest $request, Article $article)
    {
        $this->authorize('update', $article);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::delete('public/' . $article->image);
            }
            $imagePath = $request->file('image')->storeAs(
                'public/articles-images',
                'article' . $article->id . '.' . $request->file('image')->getClientOriginalExtension()
            );
            $validated['image'] = str_replace('public/', '', $imagePath);
        }

        $article->update($validated);

        return redirect()
            ->route('articles.show', [$article])
            ->with('success', 'Article updated successfully!');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $this->authorize('delete', $article);
    
        $article->delete();
        
        return redirect()->route('home')->with('success', 'article deleted successfully.');
    }
}
