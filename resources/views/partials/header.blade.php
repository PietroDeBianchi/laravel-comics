@php
$navbar = ["CHARACTERS", "COMICS", "MOVIES", "TV", "GAMES", "COLLECTIBLES", "VIDEOS", "FANS", "NEWS", "SHOP"];
$routePrefix = "/";
@endphp

<nav class="container d-flex justify-content-between align-items-center py-2">
    <div>
        <a href="/"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC LOGO"></a>
    </div>
    <ul class="d-flex justify-content-around">
        @foreach ($navbar as $navItem)
            @php
            $route = $routePrefix . strtolower($navItem);
            @endphp
            <a href="{{ $route }}">
                <li class="nav-element">{{ $navItem }}</li>
            </a>
        @endforeach
    </ul>
    <div>
        <input type="search" name="search" id="input-search" placeholder="Search 🔍︎">
    </div>
</nav>
