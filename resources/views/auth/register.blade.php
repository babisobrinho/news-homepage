@extends('layouts.layout')

@section('title', "New Account")

@section('content')

<div class="form-container">

    <h1>Register</h1>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
            <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
            <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
            @error('password')
            <small style="color: red;">{{ $message }}</small>
            @enderror
        </div>

        <div>
            <button type="submit">Register</button>
        </div>
    </form>

</div>

@endsection