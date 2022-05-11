@extends('frontend.layout.app')

@section('title', 'Job Page')

@section('content')

    <section>
        <div class="container mt-2 pt-3">
            <div class="row">
                <!-- Sidebar Start -->
                <div class="col-lg-3 d-none d-lg-block bg-light mt-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h6 class="text-uppercase fw-bold text-center mt-2 text-secondary">ফিল্টার : </h6>
                        </div>
                        <div class="list-group mx-0">
                            @foreach ($categories as $category)
                            <label class="list-group-item d-flex gap-2">
                                <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked="">
                                <span>
                                    {{ $category->title }}
                                </span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Sidebar End -->
                <div class="col-lg-9 col-12">
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
                                    <img style="margin: 0 5px;" src="{{ asset('frontend') }}/icon/list-ul.svg"
                                        alt="Kiwi standing on oval">
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
                                    <img src="{{ asset('storage/thambnail/' . $post->thambnail) }}"
                                        class="card-img-top">
                                    <div class="card-body">
                                        <a href="{{ route('singlepost', $post->id) }}" class="card-text text-decoration-none fw-bold text-secondary">
                                            {{ $post->title }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row my-3">
                        {{ $posts->links() }}
                    </div>

                </div>
            </div>
    </section>

@endsection
