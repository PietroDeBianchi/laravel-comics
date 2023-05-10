{{-- link this component to app.blade.php --}}
@extends('layouts.app')

{{-- chaghe the text of <title> of app.blade (not html elements) --}}
@section('page-title', 'DC Comics')

{{-- chaghe the 'contents' of app.blade (also html elements) --}}
@section('contents')
<h1>Comics</h1>
@endsection