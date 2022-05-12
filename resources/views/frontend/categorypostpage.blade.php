@extends('frontend.layout.app')

@section('title', 'Home Page')

@section('content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>

                            <li class="breadcrumb-item " aria-current="page">Category</li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $category->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container mt-2 pt-3">
            <div class="row">
                <!-- Sidebar Start -->
                <!-- Sidebar End -->
                <div class="col-lg-12 col-12">
                    <!-- Filter Start -->
                    <form action="" method="GET">
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex justify-content-between">
                                    <label for="" class="form-label text-secondary fw-bold pt-1"
                                        style="margin-right: 10px;">Sort:
                                    </label>
                                    <select name="sort" class="form-select" onchange="this.form.submit()">
                                        <option value="">Select</option>
                                        <option @if (isset($_GET['sort']) && $_GET['sort'] == 'asc') selected @endif value="asc">Latest
                                        </option>
                                        <option @if (isset($_GET['sort']) && $_GET['sort'] == 'desc') selected @endif value="desc">Old</option>
                                    </select>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <label for="" class="form-label text-secondary fw-bold pt-1"
                                            style="margin-right: 10px;">Show:
                                        </label>
                                        <select name="count" class="form-select" onchange="this.form.submit()">
                                            <option selected value="">10</option>
                                            <option @if (isset($_GET['count']) && $_GET['count'] == '20') selected @endif value="20">20</option>
                                            <option @if (isset($_GET['count']) && $_GET['count'] == '30') selected @endif value="30">30</option>
                                            <option @if (isset($_GET['count']) && $_GET['count'] == '40') selected @endif value="40">40</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                    <!-- Filter End -->
                    <div class="row">

                        @foreach ($posts as $post)
                            <div class="col-sm-6 col-md-4 mt-3">
                                <div class="card">
                                    <img src="{{ asset('storage/thumbnail/' . $post->thumbnail) }}"
                                        class="card-img-top">
                                    <div class="card-body">
                                        <a href="{{ route('singlepost', $post->id) }}"
                                            class="card-text text-decoration-none fw-bold text-secondary">
                                            {{ $post->title }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <div class="row my-3">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
    </section>
    <!-- Sidebar End  -->

@endsection
