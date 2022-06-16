@extends('layout.app')

@section('content')
    <div class="new_comic py-4">
        <div class="container">
            <h1>Create a new comic</h1>
            <form action="" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title Here"
                        aria-describedby="titleHelper" required>
                    <small id="titleHelper" class="text-muted">Type the comic's title</small>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumbnail</label>
                    <input type="text" name="thumb" id="thumb" class="form-control"
                        placeholder="http//:image.example.jpg" aria-describedby="thumbHelper">
                    <small id="thumbHelper" class="text-muted">Type the comic's thumbnail path</small>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group">
                        <input type="number" name="price" id="price" max="999" min="0.99"
                        class="form-control" aria-describedby="thumbHelper">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                    </div>
                    <small id="thumbHelper" class="text-muted">Type the comic's dollar amount (with dot and two decimal
                        places)</small>
                    </div>
                    
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" name="series" id="series" class="form-control" placeholder="Series Here"
                            aria-describedby="seriesHelper">
                        <small id="seriesHelper" class="text-muted">Type the comic's series</small>
                    </div>
    
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="yyyy-dd-mm"
                            aria-describedby="dateHelper">
                        <small id="dateHelper" class="text-muted">Type the comic's date realise</small>
                    </div>

                    <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" id="type" class="form-control" placeholder="Type Here"
                        aria-describedby="typeHelper">
                    <small id="typeHelper" class="text-muted">Type the comic's type</small>
                </div>

                <button type="submit" class="btn btn-primary">Add Comic</button>

            </form>
        </div>
    </div>
@endsection
