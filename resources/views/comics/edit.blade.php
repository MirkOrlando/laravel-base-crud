@extends('layout.app')

@section('content')
    <div class="new_comic py-4">
        <div class="container">
            <h1>Edit {{ $comic->title }}</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title"
                        class="form-control @error('title') is-invalid @enderror" placeholder="Title Here"
                        aria-describedby="titleHelper" value="{{ $comic->title }}">
                    <small id="titleHelper" class="text-muted">Type the comic's title</small>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror"
                        name="description" id="description" rows="5">{{ $comic->description }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumbnail</label>
                    <input type="text" name="thumb" id="thumb"
                        class="form-control @error('thumb') is-invalid @enderror" placeholder="http//:image.example.jpg"
                        value="{{ $comic->thumb }}" aria-describedby="thumbHelper">
                    <small id="thumbHelper" class="text-muted">Type the comic's thumbnail path</small>
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group">
                        <input type="number" name="price" id="price" step="0.01" max="999.99" min="0.99"
                            class="form-control @error('price') is-invalid @enderror" value="{{ $comic->price }}"
                            aria-describedby="priceHelper">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                    </div>
                    <small id="priceHelper" class="text-muted">Type the comic's dollar amount (with dot and two decimal
                        places)</small>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" name="series" id="series"
                        class="form-control @error('series') is-invalid @enderror" placeholder="Series Here"
                        value="{{ $comic->series }}" aria-describedby="seriesHelper">
                    <small id="seriesHelper" class="text-muted">Type the comic's series</small>
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="date" name="sale_date" id="sale_date"
                        class="form-control @error('sale_date') is-invalid @enderror" placeholder="yyyy-dd-mm"
                        value="{{ $comic->sale_date }}" aria-describedby="dateHelper">
                    <small id="dateHelper" class="text-muted">Type the comic's date realise</small>
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select" name="type" id="type" aria-label="Default select example" value="{{$comic->type}}">
                        <option selected disabled value="{{$comic->type}}">{{$comic->type}}</option>
                        <option value="Comic Book">Comic Book</option>
                        <option value="Graphic Novel">Graphic Novel</option>
                    </select>
                    <small id="typeHelper" class="text-muted">Select the comic's type</small>
                </div>

                <button type="submit" class="btn btn-primary">Confirm</button>

            </form>
        </div>
    </div>
@endsection
