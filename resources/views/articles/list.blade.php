@extends('layouts.layout')

@section('title', 'Frontend Mentor | News Homepage')

@section('content')

<!-- website content -->
<main id="main">

    <ul>
        @foreach($articles as $article)
            <li>
                - <b><a href="{{ route('articles.show', [$article->id]) }}">{{ $article->title }}</a></b>, Category: {{ $article->category->name }}, Created by <b>{{ $article->user->name }}</b> on {{ $article->created_at->format('M d, Y') }}
            </li>
        @endforeach
    </ul>

</main>

@endsection