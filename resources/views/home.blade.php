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
                @foreach($latestArticles as $article)
                    <li class="new-article">
                        <h3><a href="{{ route('articles.show', [$article]) }}">{{ $article->title }}</a></h3>
                        <p>{{ $article->text }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- articles -->
    <div class="articles-section">
        @include('partials._article')
    </div>

    <!-- tech & innovation articles -->
    <div class="tech-section">

        <!-- 1/3 | single article" -->
        <div class="tech-article">
            <!-- 1/3 -->
            <img src="{{ @asset('images/image-retro-pcs.jpg') }}" alt="Retro PC">
            <!-- 2/3 -->
            <div class="tech-content">
            <span>01</span>
            <h4><a href="">Reviving Retro PCs</a></h4>
            <p>What happens when old PCs are given modern upgrades?</p>
            </div>
        </div>

        <!-- 1/3 | single article" -->
        <div class="tech-article">
            <!-- 1/3 -->
            <img src="{{ @asset('images/image-top-laptops.jpg') }}" alt="Laptops">
            <!-- 2/3 -->
            <div class="tech-content">
            <span>02</span>
            <h4><a href="">Top 10 Laptops of 2022</a></h4>
            <p>Our best picks for various needs and budgets.</p>
            </div>
        </div>

        <!-- 1/3 | single article" -->
        <div class="tech-article">
            <!-- 1/3 -->
            <img src="{{ @asset('images/image-gaming-growth.jpg') }}" alt="Game Controller">
            <!-- 2/3 -->
            <div class="tech-content">
            <span>03</span>
            <h4><a href="">The Growth of Gaming</a></h4>
            <p>How the pandemic has sparked fresh opportunities.</p>
            </div>
        </div>
    </div>

</main>

@endsection