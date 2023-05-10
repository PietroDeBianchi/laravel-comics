@php
    $Comics = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'video', 'News',];
    $Dcs = ['Term of Use', 'Privacy Policy (New)', 'Ad Choises', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'];
    $Sites = ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'];
@endphp

<div class="container d-flex justify-content-between align-items-center py-3">
    <div class="LinksContainer">
        <div>
            <ul>
                <h3>DC COMICS</h3>
                @foreach ($Comics as $comic)
                <li><a href="#">{{ $comic }}</a></li>
                @endforeach
            </ul>
            <ul>
                <h3>SHOP</h3>
                <li><a href="#">Shop DC</a></li>
                <li><a href="#">Shop DC Collectibles</a></li>
            </ul>
        </div>
        <div>
            <ul>
                <h3>DC</h3>
                @foreach ($Dcs as $dc)
                <li><a href="#">{{ $dc }}</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <ul>
                <h3>SITES</h3>
                @foreach ($Sites as $site)
                <li><a href="#">{{ $site }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="imgBox">
        <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
    </div>
</div>