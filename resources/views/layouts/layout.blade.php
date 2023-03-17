<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Frontend Mentor | News')</title>
    <link rel="icon" type="image/x-icon" href="{{ @asset('images/favicon-32x32.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="container">

        @include('partials._error')

        @include('partials._success')

        @include('layouts._navbar')

        @yield('content')

    </div>
    
</body>
</html>