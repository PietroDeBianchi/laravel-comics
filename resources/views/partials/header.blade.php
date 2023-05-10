@php
$navbar = ["CHARACTERS", "COMICS", "MOVIES", "TV", "GAMES", "COLLECTIBLES", "VIDEOS", "FANS", "NEWS", "SHOP"];
$routePrefix = "/";
@endphp

<nav>
    <ul class="headerNavbar">
        @foreach ($navbar as $navItem)
            @php
            $route = $routePrefix . strtolower($navItem);
            @endphp
            <a href="{{ $route }}">
                <li class="nav-element">{{ $navItem }}</li>
            </a>
        @endforeach
    </ul>
</nav>
