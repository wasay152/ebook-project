


<div class="container mt-5 pt-5 mb-5">

    <div class="row justify-content-center">
        <div class="col-md-8">

{{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success text-center fw-bold">
                    {{ session('success') }}
                </div>
            @endif


            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">📖 Place Your Book Order</h4>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('customer_order.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Customer Name:</label>
                            <input type="text" class="form-control" name="customer_name" value="{{ old('customer_name') }}">
                            @error('customer_name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone:</label>
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address:</label>
                            <textarea class="form-control" name="address" rows="3">{{ old('address') }}</textarea>
                            @error('address')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select Book:</label>
                          <select class="form-select" name="book_id" required>
    <option value="" disabled selected hidden>Select a book</option>
    @foreach($books as $book)
        <option value="{{ $book->id }}" {{ old('book_id') == $book->id ? 'selected' : '' }}>
            {{ $book->title }} by {{ $book->author }}
        </option>
    @endforeach
</select>
                            @error('book_id')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Quantity:</label>
                            <input type="number" class="form-control" name="quantity" value="{{ old('quantity', 1) }}" min="1">
                            @error('quantity')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success px-5 py-2">
                                📦 Place Order
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-muted text-center">
                    E-BOOK © 2025 — Order with confidence ✨
                </div>
            </div>
        </div>
    </div>
</div>

