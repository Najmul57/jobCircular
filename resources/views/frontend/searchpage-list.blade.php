@extends('frontend.layouts.app')

@section('title', 'Search Page')

@section('content')

    <section>
        <div class="container mt-2 pt-3">
            <form action="" method="get">
                <div class="row">
                    <input type="hidden" name="keyword"
                        value="@if (isset($_GET['keyword'])) {{ trim($_GET['keyword']) }} @endif">
                    <!-- Sidebar Start -->
                    <div class="col-lg-3 d-none d-lg-block bg-light mt-3">
                        <div class="card mb-4 ">
                            <div class="card-header ">
                                <h6 class="text-uppercase fw-bold text-center mt-2 text-secondary">ফিল্টার : </h6>
                            </div>
                            <div class="list-group mx-0">
                                @foreach ($categories as $category)
                                    <label class="list-group-item d-flex gap-2">
                                        <input name="category[]" value="{{ $category->id }}" onchange="this.form.submit()"
                                            class="form-check-input flex-shrink-0" type="checkbox"
                                            @if (isset($_GET['category']) && in_array($category->id, $_GET['category'])) checked @endif \>
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
                                    <select name="sort" class="form-select" onchange="this.form.submit()">
                                        <option value="">Select</option>
                                        <option @if (isset($_GET['sort']) && $_GET['sort'] == 'asc') selected @endif value="asc">Latest
                                        </option>
                                        <option @if (isset($_GET['sort']) && $_GET['sort'] == 'desc') selected @endif value="desc">Old</option>
                                    </select>
                                </div>
                                <div class="d-flex">
                                    <label for="" class="form-label text-secondary fw-bold pt-1"
                                        style="margin-right: 10px;">Show:
                                    </label>
                                    <select name="count" class="form-select" onchange="this.form.submit()">
                                        <option selected value="">10</option>
                                        <option @if (isset($_GET['count']) && $_GET['count'] == '20') selected @endif value="20">20</option>
                                        <option @if (isset($_GET['count']) && $_GET['count'] == '30') selected @endif value="30">30</option>
                                        <option @if (isset($_GET['count']) && $_GET['count'] == '40') selected @endif value="40">40</option>
                                    </select>

                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input name="view" value="list" onchange="this.form.submit()" type="radio"
                                            class="btn-check" id="btnradio1" autocomplete="off"
                                            @if (isset($_GET['view']) && $_GET['view'] == 'list') checked @endif>
                                        <label class="btn  @if (isset($_GET['view']) && $_GET['view'] == 'list') bg-body border @endif "
                                            for="btnradio1"><img style="margin: 0 5px;"
                                                src="{{ asset('frontend') }}/icon/list-ul.svg"
                                                alt="Kiwi standing on oval">
                                        </label>

                                        <input name="view" value="grid" onchange="this.form.submit()" type="radio"
                                            class="btn-check" id="btnradio2" autocomplete="off"
                                            @if (isset($_GET['view']) && $_GET['view'] == 'grid') checked @endif>
                                        <label class="btn @if (isset($_GET['view']) && $_GET['view'] == 'grid') bg-body border @endif "
                                            for="btnradio2">
                                            <img style="margin: 0 5px;"
                                                src="{{ asset('frontend') }}/icon/grid-3x3-gap-fill.svg"
                                                alt="Kiwi standing on oval">
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        @if (isset($_GET['keyword']))
                            <div class="bg-body mt-3">
                                <p><strong>Your are Searching: </strong> {{ $_GET['keyword'] }}</p>
                            </div>
                        @endif

                        <!-- Filter End -->


                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-sm-12 col-md-12 mt-3">
                                    <div class="card mb-3">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="{{ asset('storage/thumbnail/' . $post->thumbnail) }}"
                                                    class="card-img-top">
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-body">
                                                    <a href="{{ route('singlepost', $post->id) }}"
                                                        class="card-text text-decoration-none fw-bold text-secondary">
                                                        {{ $post->title }}
                                                    </a>
                                                    <div
                                                        class="post-author d-flex justify-content-between align-items-center">
                                                        <div class="blog-author py-3">
                                                            <span><strong><i class="fa fa-user"></i>
                                                                    Najmul</strong></span> <br>
                                                            <span><strong><i class="fa-solid fa-blog"></i>
                                                                    Category</strong></span> <br>
                                                            <span><strong><i class="fa-solid fa-clock"></i> May 7,
                                                                    2022</strong></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
            </form>
    </section>

@endsection
