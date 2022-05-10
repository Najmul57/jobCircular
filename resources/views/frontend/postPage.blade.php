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
                            <label class="list-group-item d-flex gap-2">
                                <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked="">
                                <span>
                                    সরকারী চাকরী
                                </span>
                            </label>
                            <label class="list-group-item d-flex gap-2">
                                <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked="">
                                <span>
                                    NGO চাকরী
                                </span>
                            </label>
                            <label class="list-group-item d-flex gap-2">
                                <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked="">
                                <span>
                                    কোম্পানী চাকরী
                                </span>
                            </label>
                            <label class="list-group-item d-flex gap-2">
                                <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked="">
                                <span>
                                    আই.টি চাকরী
                                </span>
                            </label>
                            <label class="list-group-item d-flex gap-2">
                                <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked="">
                                <span>
                                    অনান্য
                                </span>
                            </label>
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

                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <img src="{{ asset('frontend') }}/img/tv.jpg" class="card-img-top">
                                <div class="card-body">
                                    <a href="single.html"
                                        class="card-text text-decoration-none fw-bold text-secondary">Lorem ipsum dolor sit
                                        amet
                                        consectetur adipisicing elit. Impedit, veritatis.</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <img src="{{ asset('frontend') }}/img/tv.jpg" class="card-img-top">
                                <div class="card-body">
                                    <a href="single.html"
                                        class="card-text text-decoration-none fw-bold text-secondary">Lorem ipsum dolor sit
                                        amet
                                        consectetur adipisicing elit. Impedit, veritatis.</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <img src="{{ asset('frontend') }}/img/tv.jpg" class="card-img-top">
                                <div class="card-body">
                                    <a href="single.html"
                                        class="card-text text-decoration-none fw-bold text-secondary">Lorem ipsum dolor sit
                                        amet
                                        consectetur adipisicing elit. Impedit, veritatis.</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <img src="{{ asset('frontend') }}/img/tv.jpg" class="card-img-top">
                                <div class="card-body">
                                    <a href="single.html"
                                        class="card-text text-decoration-none fw-bold text-secondary">Lorem ipsum dolor sit
                                        amet
                                        consectetur adipisicing elit. Impedit, veritatis.</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <img src="{{ asset('frontend') }}/img/tv.jpg" class="card-img-top">
                                <div class="card-body">
                                    <a href="single.html"
                                        class="card-text text-decoration-none fw-bold text-secondary">Lorem ipsum dolor sit
                                        amet
                                        consectetur adipisicing elit. Impedit, veritatis.</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <img src="{{ asset('frontend') }}/img/tv.jpg" class="card-img-top">
                                <div class="card-body">
                                    <a href="single.html"
                                        class="card-text text-decoration-none fw-bold text-secondary">Lorem ipsum dolor sit
                                        amet
                                        consectetur adipisicing elit. Impedit, veritatis.</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <img src="{{ asset('frontend') }}/img/tv.jpg" class="card-img-top">
                                <div class="card-body">
                                    <a href="single.html"
                                        class="card-text text-decoration-none fw-bold text-secondary">Lorem ipsum dolor sit
                                        amet
                                        consectetur adipisicing elit. Impedit, veritatis.</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <img src="{{ asset('frontend') }}/img/tv.jpg" class="card-img-top">
                                <div class="card-body">
                                    <a href="single.html"
                                        class="card-text text-decoration-none fw-bold text-secondary">Lorem ipsum dolor sit
                                        amet
                                        consectetur adipisicing elit. Impedit, veritatis.</a>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- Pagination -->
                    <div class="row my-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">2</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
    </section>

@endsection
