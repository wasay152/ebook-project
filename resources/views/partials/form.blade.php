<!-- Header section -->
<div class="container mt-5">
    <h4 class="text-center">Add Book Pricing</h4>
</div>

<!-- Form section -->
<div class="container mt-4">
    <form action="{{ route('bookpricing.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="book_name" class="form-label">Book Name</label>
            
              <select name="book_name" class="form-control" required>
                <option value="">Select Book Name</option>
                <option value="the alchemist">The Alchemist</option>
                <option value="to kill a monkeybird">To Kill A Monkeybird</option>
                <option value="1984">1984</option>
                  <option value="pride and prejudice">Pride And Prejudice</option>
                    <option value="the great gats by">The Great Gats By</option>
                      <option value="the power of now">The Power Of Now</option>
                        <option value="think and glow rich">Think And Glow Rich</option>
                          <option value="atomic habits">Atomic Habits</option>
                            <option value="sapiens">Sapiens</option>
                         <option value="the Silk Roads">the Silk Roads</option>
            </select>
        </div>
<br>
        <div class="mb-3">
            <label for="card_type" class="form-label">Card Type</label>
            <select name="card_type" class="form-control" required>
                <option value="">Select card type</option>
                <option value="Hardcover">Hardcover</option>
                <option value="Paperback">Paperback</option>
                <option value="E-book"></option>
            </select>
        </div>
<br>
    <div class="mb-3">
    <label for="price" class="form-label">Price </label>
    <input type="number" name="price" class="form-control" min="1000" step="1000" value="1000" required>
</div>

<!-- ✅ SUCCESS MESSAGE SHOWN HERE -->
@if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif

        <button type="submit" class="btn btn-primary">Save Pricing</button>
    </form>
</div>


