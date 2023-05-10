{{-- link this component to app.blade.php --}}
@extends('layouts.app')

{{-- chaghe the text of <title> of app.blade (not html elements) --}}
@section('page-title', 'DC Characters')

{{-- chaghe the 'contents' of app.blade (also html elements) --}}
@section('contents')
<div id="characters-container">
    <h3>All Your Favourte Heros!</h3>
</div>
@endsection