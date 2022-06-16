@extends('layout.app')

@section('content')
    <div class="comic">
        <div class="container">
            <h1>{{ $comic->series }}</h1>
            <div class="row align-items-center">
                <div class="col-3">
                    <img class="img-fluid flex-grow-1" src="{{ $comic->thumb }}" alt="">
                </div>
                <div class="col-9 text-justify">
                    <h2>{{ $comic->title }}</h2>
                    <p>{{ $comic->description }}</p>
                    <div>
                        <strong>Price: </strong>$ <span>{{ $comic->price }}</span>
                        <strong>Type: </strong><span>{{ $comic->type }} </span>
                        <strong>Sale Day: </strong><span>{{ $comic->sale_date }} </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
