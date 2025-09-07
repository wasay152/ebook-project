<!-- resources/views/partials/header.blade.php -->

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="navbar-brand-icon bi-book me-2"></i>
            <span>ebook</span>
        </a>

        <div class="d-lg-none ms-auto me-3">
            <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                <i class="btn-icon bi-cloud-download"></i>
                <span>Download</span>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto me-lg-4">
                <a class="nav-link" href="{{ route('index') }}">Home</a>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('book') }}">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Author') }}">Author</a>
                </li>
              
     <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="purchaseDropdown" role="button" data-bs-toggle="dropdown">
                        Purchase
                    </a>
                    <ul class="dropdown-menu">
                       <li>
    <a class="dropdown-item" href="{{ route('bookpricing') }}">Book Pricing</a>
</li>

<li>
    <a class="dropdown-item" href="{{ route('bookpurchase') }}">Book purchase</a>
</li>

</ul>                   
 <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer-order') }}">CustomerOrder</a>
                </li>
               
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('booklibrary') }}">BookLibrary</a>
                </li>
               
                <li class="nav-item">
             

<li class="nav-item">
    <a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
</li>

            </ul>
        </div>
    </div>
</nav>

