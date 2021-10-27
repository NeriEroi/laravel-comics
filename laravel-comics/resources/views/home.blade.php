@extends('layouts.app')

@section('jumbotron')
    <h1>
        JUMBOTRON
    </h1>
@endsection

@section('series')

    <div class="container">

        <ul>
        
            @foreach ($comics as $comic)
    
                <li class="item_cont">
                    <div class="image_cont">
                        <img src="{{ $comic['thumb'] }}" alt="comic image">
                    </div>
                    
                    <div class="title_cont">
                        <p>
                            {{ $comic['series'] }}
                        </p>
                    </div>
                </li>
    
            @endforeach
    
        </ul>

    </div>
    
@endsection

@section('shop')
    <h1>
        SHOP
    </h1>
@endsection