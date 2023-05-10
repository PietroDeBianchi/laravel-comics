{{-- link this component to app.blade.php --}}
@extends('layouts.app')

{{-- chaghe the text of <title> of app.blade (not html elements) --}}
@section('page-title', 'Home DC')

{{-- chaghe the 'contents' of app.blade (also html elements) --}}
@section('contents')

<div id="home-container">
    <div class="container pt-4">
        <div class="text-box">
            <h3 class="text-center">SCROLL TO SEE THE SPECIAL VOLUMES OF THE MONTH!</h3>
        </div>
        <div class="row">
            @foreach ($data as $dataitem)
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{$dataitem['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body p-2">
                        <h5>{{$dataitem['title']}}</h5>
                        {{-- cycle all writers in $writers
                        @foreach ($dataitem['writers'] as $writer)
                            <span class="card-text">{{$writer}}</span>
                        @endforeach 
                        --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection