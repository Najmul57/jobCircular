@php
    $categories = App\Models\Category::get();
@endphp
<header class="container-fluid border-bottom sticky-top bg-body">
    <div class="container bg-body">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('frontend') }}/img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-bold " aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        @foreach ($categories as $category )
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="{{ route('categorypost', $category->id) }}">{{ $category->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>
