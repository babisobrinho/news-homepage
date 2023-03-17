@extends('layouts.layout')

@section('title', $article->title)

@section('content')

    <div style="width: 50%; border-style: solid; border-width: medium;">
        <img src="{{ asset("storage/$article->image") }}" alt="Image">
        <p>Category:
            @if ($article->category)
                {{ $article->category->name }}
            @else
                {{ 'foda-se' }}
            @endif
        </p>
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->text }}</p>
        <p>Created by {{ $article->user->name }} on {{ $article->created_at->format('d/m/Y') }}</p>
        @can('update', $article)
            <a href="{{ route('articles.edit', $article) }}">Edit</a>
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