<!-- navbar -->
<nav>
    <!-- desktop right side -->
    <div class="nav-logo" id="nav-logo">
        <a href="#">
            <img src="{{ @asset('images/logo.svg') }}" alt="Logo">
        </a>
    </div>
    <!-- desktop left side -->
    <div class="nav-links" id="nav-links">
    <div class="nav-container">
        <a style="{{ request()->routeIs('home') ? 'background-color: yellow;' : '' }}" href="{{ route('home') }}">Home</a>
        <a href="#">New</a>
        <a href="#">Popular</a>
        <a href="#">Trending</a>
        <a style="{{ request()->routeIs('categories') ? 'background-color: yellow;' : '' }}" href="{{ route('categories') }}">Categories</a>
        @guest
        <a class="auth-button" style="{{ request()->routeIs('register') ? 'background-color: yellow;' : '' }}" href="{{ route('register') }}">Register</a>
        <a class="auth-button" style="{{ request()->routeIs('login') ? 'background-color: yellow;' : '' }}" href="{{ route('login') }}">Login</a>
        @endguest
        @auth
        <a class="auth-button" href="{{ route('logout') }}">Logout</a>
        <span>Hello, <b>{{ Auth::user()->name }}</b></span>
        @endauth
    </div>
    </div>

    <!-- mobile -->
    <div class="menu">
    <img src="{{ @asset('images/icon-menu.svg') }}" alt="Menu Icon" class="menu-icon" id="menu-icon">
    </div>
</nav>