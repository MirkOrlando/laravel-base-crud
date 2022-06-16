@extends('layout.app')

@section('content')
<div class="comics">
    <div class="container">
        <h1>Comics</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{$comic->id}}</th>
                    <td>{{$comic->title}}</td>
                    <td>
                        <p style="max-width: 400px;" class="text-truncate">
                            {{$comic->description}}
                        </p>
                    </td>
                    <td>
                        <img width="50px" src="{{$comic->thumb}}" alt="">
                    </td>
                    <td class="text-nowrap">$ {{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td class="text-nowrap">{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td class="actions"></td>
                </tr>      
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
