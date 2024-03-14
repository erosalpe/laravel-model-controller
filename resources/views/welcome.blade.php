@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

@section('style')
    <style lang="scss">
       .cardCustom{
            --gap: 1.5rem;
    		--columns: 4;
    		flex-basis: calc((100% / var(--columns)) - var(--gap) + (var(--gap) / var(--columns)));
       }
    </style>
@endsection

@section('main')
    <h1 class="text-center pb-5">Films</h1>
    
        <div class="d-flex flex-wrap w-75 m-auto gap-4">
            @foreach($movies as $element)
                <div class="card cardCustom">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="{{$element['original_title']}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$element['title']}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Anno: {{$element['date']}}</li>
                        <li class="list-group-item">Titolo originale: {{$element['original_title']}}</li>
                        <li class="list-group-item">Nazionalità: {{$element['nationality']}}</li>
                        <li class="list-group-item">Voto: {{$element['vote']}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    
@endsection


