@extends('layouts.layout')

@section('title', 'New Article')

@section('content')

<div class="form-container">
    <h1>New Article</h1>

    <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
        @csrf

        <label for="title">Title</label>
        <input id="title" type="text" name="title" value="{{ old('title') }}" required autofocus>
        @error('title')
            <small>{{ $message }}</small>
        @enderror

        <label for="text">Text</label>
        <textarea id="text" name="text" rows="10" required>{{ old('text') }}</textarea>
        @error('text')
            <small>{{ $message }}</small>
        @enderror

        <label for="category_id">Category</label>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" @if(old('category_id') == $category->id) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        @error('image')
            <small>{{ $message }}</small>
        @enderror

        <button type="submit">Create Article</button>
    </form>
</div>

@endsection