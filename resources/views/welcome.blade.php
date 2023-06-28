@extends('layouts.app')

@section('content')

<div class="libraryComics">
    <div class="container d-flex flex-wrap my-5">
        
        @foreach ($comicx as $comic)
    
            <div class="boxCard">
                <img class="logo" src={{$comic['thumb']}} alt="Logo">
                <h4 class="text-primary">{{$comic['title']}}</h4>
            </div>
    
        @endforeach
    
    </div>
    <div class="d-flex justify-content-center py-3">
        <button class="btn btn-primary">Load More</button>
    </div>
</div>

<div class="infoList bg-primary">
    <div class="container">

        
        <div class="row py-3">

            @foreach ($comicsInfoShop as $info)

            <div class="col">
                <img src="{{ asset("storage/{$info['path']}") }}" alt="">
                <p>{{$info['text']}}</p>
            </div>

            @endforeach

        </div>


    </div>
</div>


@endsection