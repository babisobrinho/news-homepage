@extends('layouts.layout')

@section('title', 'Frontend Mentor | News Homepage')

@section('content')

    @auth
    <a class="button" href="{{ route('articles.create') }}">Create New</a>
    @endauth

    <div class="form-container">
        <h1>All Articles</h1>

            <ul>
                <li>
                    
                </li>
                @foreach($articles as $article)
                    <li>
                        - <b><a href="{{ route('articles.show', [$article->id]) }}">{{ $article->title }}</a></b>, {{ $article->category->name }}, Created by <b>{{ $article->user->name }}</b> on {{ $article->created_at->format('M d, Y') }}
                    </li>
                @endforeach
            </ul>
    </div>

    

@endsection