<!-- navbar -->
<nav>
    <!-- desktop right side -->
    <div class="nav-logo" id="nav-logo">
        <a href="{{ route('home') }}">
            <img src="{{ @asset('images/logo.svg') }}" alt="Logo">
        </a>
    </div>
    <!-- desktop left side -->
    <div class="nav-links" id="nav-links">
    <div class="nav-container">
        <a class="{{ request()->routeIs('home') ? 'navActive' : '' }}" href="{{ route('home') }}">Home</a>
        <a class="{{ request()->routeIs('list') ? 'navActive' : '' }}" href="{{ route('list') }}">New</a>
        <a href="#">Popular</a>
        <a href="#">Trending</a>
        <a class="{{ request()->routeIs('categories') ? 'navActive' : '' }}" href="{{ route('categories') }}">Categories</a>
        @guest
        <a class="button" style="{{ request()->routeIs('register') ? 'navActive' : '' }}" href="{{ route('register') }}">Register</a>
        <a class="button" style="{{ request()->routeIs('login') ? 'navActive' : '' }}" href="{{ route('login') }}">Login</a>
        @endguest
        @auth
        <span>Hello, <b>{{ Auth::user()->name }}</b></span>
        <a class="button" href="{{ route('logout') }}">Logout</a>
        @endauth
    </div>
    </div>

    <!-- mobile -->
    <div class="menu">
    <img src="{{ @asset('images/icon-menu.svg') }}" alt="Menu Icon" class="menu-icon" id="menu-icon">
    </div>
</nav>