

<div class="container" style="padding-top: 80px;">
    <h2 class="mb-4">📚 Purchase a Book</h2>

    <!-- Form to Add Book -->
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" class="mb-5">
        @csrf

        <div class="mb-3">
            <label for="title">Book Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="book_cover">Book Image</label>
            <input type="file" name="book_cover" id="book_cover" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Purchase</button>
    </form>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<br>
    <!-- Display Books -->
    <div class="row">
        @foreach($books as $book)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
           
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text"><strong>Author:</strong> {{ $book->author }}</p>
                    <p class="card-text"><strong>Price:</strong> ${{ number_format($book->price, 2) }}</p>
                    <a href="#" class="btn btn-primary mt-auto">"Thanks for your book purchase!"😊</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

