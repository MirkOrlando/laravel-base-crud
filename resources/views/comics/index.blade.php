@extends('layout.app')

@section('content')
    <div class="comics py-4">
        <div class="container">
            <div class="top d-flex justify-content-between align-items-center">
                <h1>Comics</h1>
                <div class="new">
                    <a class="btn btn-sm btn-primary" href="{{route('comics.create')}}">New Comic</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Series</th>
                        <th scope="col">Title</th>
                        {{-- <th scope="col">Description</th> --}}
                        <th scope="col">Price</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Thumb</th>
                        {{-- <th scope="col">Type</th> --}}
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->title }}</td>
                            {{-- <td>
                        <p style="max-width: 400px;" class="text-truncate">
                            {{$comic->description}}
                        </p>
                    </td> --}}
                    <td class="text-nowrap">$ {{ $comic->price }}</td>
                    <td class="text-nowrap">{{ $comic->sale_date }}</td>
                    <td>
                        <img width="50px" src="{{ $comic->thumb }}" alt="">
                    </td>
                            {{-- <td>{{ $comic->type }}</td> --}}
                            <td class="actions">
                                <a href="{{route('comics.show', $comic->id)}}">View</a> - Edit - Delete
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
