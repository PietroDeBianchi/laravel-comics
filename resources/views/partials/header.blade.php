@php
$navbar = ["CHARACTERS", "COMICS", "MOVIES", "TV", "GAMES", "COLLECTIBLES", "VIDEOS", "FANS", "NEWS", "SHOP"];
$routePrefix = "/";
@endphp

<nav class="container d-flex justify-content-between align-items-center mx-2">
    <div>
        <a href="/"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC LOGO" class="my-1"></a>
    </div>
    <ul class="d-flex justify-content-around align-self-stretch">
        @foreach ($navbar as $navItem)
            @php
            $route = $routePrefix . strtolower($navItem);
            @endphp
            <a href="{{ $route }}" class="d-flex align-items-center mx-3">
                <li class="nav-element py-4">{{ $navItem }}</li>
            </a>
        @endforeach
    </ul>
    <div>
        <input type="search" name="search" id="input-search" placeholder="Search  🔍︎">
    </div>
</nav>
<div class="jumbotron">
</div>
