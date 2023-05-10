{{-- link this component to app.blade.php --}}
@extends('layouts.app')

{{-- chaghe the text of <title> of app.blade (not html elements) --}}
@section('page-title', 'Home DC')

{{-- chaghe the 'contents' of app.blade (also html elements) --}}
@section('contents')
{{-- <div class="container artists-list">
    <div class="row">
        <ul>
            @foreach ($seriesList as $SerieItem)
                <li>
                    <h3>{{$SerieItem['title']}}</h3>
                    <div class="artisti">
                        <h5>Artists</h5>
                            @foreach ($SerieItem['artists'] as $artist)
                                <span>{{$artist}},</span>
                            @endforeach
                    </div>
                    <div class="scrittori">
                        <h5>Scrittori</h5>
                            @foreach ($SerieItem['writers'] as $writer)
                                <span>{{$writer}},</span>
                            @endforeach
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</div> --}}
@endsection