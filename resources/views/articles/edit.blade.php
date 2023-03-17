@extends('layouts.layout')

@section('title', 'Edit Article')

@section('content')

    <h1>Edit Article</h1>

    <form method="POST" action="{{ route('articles.update', $article) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input id="title" type="text" name="title" value="{{ $article->title }}" required autofocus>
        @error('title')
        <small style="color: red;">{{ $message }}</small>
        @enderror

        <label for="text">Text</label>
        <textarea name="text" id="text" cols="30" rows="10" required>{{ $article->text }}</textarea>
        @error('text')
        <small style="color: red;">{{ $message }}</small>
        @enderror

        <label for="category_id">Category</label>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @if($article->category_id == $category->id) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="image">Image</label>
        <div>
            @if($imageUrl)
            <img src="{{ $imageUrl }}" width="100">
            @endif
            <div>
                <input type="file" name="image" id="image">
                <label for="image">Choose file</label>
            </div>
        </div>
        @error('image')
        <small>{{ $message }}</small>
        @enderror

        <button type="submit">Update</button>
    </form>
@endsection