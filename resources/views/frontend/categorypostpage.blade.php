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

                            <li class="breadcrumb-item active" aria-current="page">Library</li>

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
                    <div class="row">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex justify-content-between">
                                <label for="" class="form-label text-secondary fw-bold pt-1"
                                    style="margin-right: 10px;">Filter:
                                </label>
                                <select class="form-select">
                                    <option selected>Latest</option>
                                    <option value="1">Old</option>
                                    <option value="2">New</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between">
                                    <label for="" class="form-label text-secondary fw-bold pt-1"
                                        style="margin-right: 10px;">Show:
                                    </label>
                                    <select class="form-select">
                                        <option selected>10</option>
                                        <option value="1">20</option>
                                        <option value="2">30</option>
                                        <option value="3">40</option>
                                    </select>
                                    <img style="margin: 0 5px;" src="{{ asset('frontend') }}/icon/list-ul.svg" alt="Kiwi standing on oval">
                                    <img style="margin: 0 5px;" src="{{ asset('frontend') }}/icon/grid-3x3-gap-fill.svg"
                                        alt="Kiwi standing on oval">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Filter End -->
                    <div class="row">

                        @foreach ($posts as $post)
                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <img src="{{ asset('storage/thumbnail/'.$post->thumbnail) }}" class="card-img-top">
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
