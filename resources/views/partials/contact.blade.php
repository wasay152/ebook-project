
<div class="container mt-5 pt-5 mb-5">

    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- ✅ Success Message --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show fw-bold text-center shadow-sm" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">📬 Contact Us</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Name:</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Subject:</label>
                            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}">
                            @error('subject') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message:</label>
                            <textarea name="message" class="form-control" rows="5">{{ old('message') }}</textarea>
                            @error('message') <div class="text-danger small">{{ $message }}</div> @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success px-4">Send Message</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

