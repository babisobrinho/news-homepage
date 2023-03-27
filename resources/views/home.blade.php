@extends('layouts.layout')

@section('title', 'Frontend Mentor | News Homepage')

@section('content')

<!-- website content -->
<main id="main">

    <!-- desktop 2/3 | mobile full | header -->
    <div class="header">

        <!-- desktop 2/3 | mobile full | highlight -->
        <div class="highlight">
            <img src="{{ asset('storage/'.$highlightedArticle->image.'?'.time()) }}" alt="{{ $highlightedArticle->title }}">
            <div class="highlight-post">
            <!-- 1/3 -->
            <h1>{{ $highlightedArticle->title }}</h1>

            <!-- 1/3 -->
            <div class="highlight-text">
                <p>{{ Str::limit($highlightedArticle->text, 200) }}</p>
                <a href="{{ route('articles.show', [$highlightedArticle]) }}">Read more</a>
            </div>
            </div>
        </div>

        <!-- 1/3 | "new" -->
        <div class="new-section">
            <h2>New</h2>

            <!-- list of articles -->
            <ul class="new-articles">
                @foreach($newArticles as $newArticle)
                    <li class="new-article">
                        <h3><a href="{{ route('articles.show', [$newArticle]) }}">{{ $newArticle->title }}</a></h3>
                        <p>{{ explode('.', $newArticle->text, 2)[0] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- tech & innovation articles -->
    <div class="tech-section">
        @foreach($techArticles as $techArticle)
        <!-- 1/3 | single article" -->
        <div class="tech-article">
            <!-- 1/3 -->
            <img src="{{ asset('storage/'.$techArticle->image.'?'.time()) }}" alt="{{ $techArticle->title }}">
            <!-- 2/3 -->
            <div class="tech-content">
            <span>0{{ $loop->iteration }}</span>
            <h4><a href="{{ route('articles.show', [$techArticle]) }}">{{ $techArticle->title }}</a></h4>
            <p>{{ Str::limit($techArticle->text, 100) }}</p>
            </div>
        </div>
        @endforeach
    </div>

</main>

@endsection