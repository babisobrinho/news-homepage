@extends('layouts.layout')

@section('title', 'Frontend Mentor | News Homepage')

@section('content')

<!-- website content -->
<main id="main">

    <!-- desktop 2/3 | mobile full | header -->
    <div class="header">

        <!-- desktop 2/3 | mobile full | highlight -->
        <div class="highlight">
            <img src="{{ @asset('images/image-web-3-desktop.jpg') }}" alt="Puzzles">
            <div class="highlight-post">
            <!-- 1/3 -->
            <h1>The Bright Future of Web 3.0?</h1>

            <!-- 1/3 -->
            <div class="highlight-text">
                <p>We dive into the next evolution of the web that claims to put the power of the platforms back into the hands of the people. But is it really fulfilling its promise?</p>
                <a href="">Read more</a>
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
            <img src="{{ asset('storage/'.$techArticle->image) }}" alt="{{ $techArticle->title }}">
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