@extends('layout.app')

@section('content')
    <div class="comic py-4">
        <div class="container">
            <h1>{{ $comic->series }}</h1>
            <div class="row py-3">
                <div class="col-3">
                    <img class="img-fluid flex-grow-1" src="{{ $comic->thumb }}" alt="">
                </div>
                <div class="col-9">
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
