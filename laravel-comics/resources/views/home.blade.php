@extends('layouts.app')

@section('jumbotron')
    <h1>
        JUMBOTRON
    </h1>
@endsection

@section('series')
    <ul>
        
        @foreach ($comics as $comic)
            
            <img src="{{ $comic['thumb'] }}" alt="">
            
            {{ $comic['series'] }}


        @endforeach

    </ul>
@endsection

@section('shop')
    <h1>
        SHOP
    </h1>
@endsection