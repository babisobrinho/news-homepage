@extends('layouts.layout')

@section('title', $article->title)

@section('content')

    <div class="single-article">
        @if ($article->image)
            <img src="{{ asset('storage/'.$article->image.'?'.time()) }}" alt="{{ $article->title }}">
        @endif
        <span>
            @if ($article->category)
                {{ $article->category->name }}
            @endif
        </span>
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->text }}</p>
        <p>Created by {{ $article->user->name }} on {{ $article->created_at->format('d/m/Y') }}</p>
        @can('update', $article)
            <a class="edit-button" href="{{ route('articles.edit', $article) }}">Edit</a>
        @endcan
        @can('delete', $article)
        <form action="{{ route('articles.destroy', $article) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        @endcan

    </div>

@endsection