@extends('frontend.layout.app')

@section('title', 'Post Page')

@section('content')
    <div class="main-content py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-details">
                        <h5>{{ $post->title }}</h5>
                        <img class="w-100" src="{{ asset('storage/thumbnail/' . $post->thumbnail) }}" alt="">
                        <div class="post-author d-flex justify-content-between align-items-center">
                            <div class="blog-author py-3">
                                <span><strong><i class="fa fa-user"></i> Najmul</strong></span> |
                                <span><strong><i class="fa-solid fa-blog"></i> {{ $post->category->title ?? 'No Category' }}</strong></span> |
                                <span><strong><i class="fa-solid fa-clock"></i> May 7, 2022</strong></span>
                            </div>
                            <div class="blog-share d-flex justify-content-end">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                                <a href="#"> <i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        <h5>{{ $post->title }}</h5>

                        {!! $post->description !!}

                    </div>
                </div>
                <div class="col-md-4">
                    <aside>
                        <div class="single-sidebar">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5>Categories</h5>
                                </div>
                                <div class="list-group">
                                    @foreach ($categories as $category)
                                        <a href="{{ route('categorypost', $category->id) }}"
                                            class="list-group-item list-group-item-action list-group-item-light">{{ $category->title }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar mb-3">
                            <a href="{{ url('/') }}">
                                <img style="width: 100%" src="{{ asset('frontend') }}/img/small-ads.webp" alt="">
                            </a>
                        </div>
                        <div class="single-sidebar">
                            <a href="{{ url('/') }}">
                                <img style="width: 100%" src="{{ asset('frontend') }}/img/ads.svg" alt="">
                            </a>
                        </div>
                        {{-- <div class="single-sidebar">
                            <h5>Tags</h5>
                            <ul>
                                <li><a href="#">tags</a></li>
                                <li><a href="#">tags</a></li>
                                <li><a href="#">tags</a></li>
                                <li><a href="#">tags</a></li>
                                <li><a href="#">tags</a></li>
                                <li><a href="#">tags</a></li>
                                <li><a href="#">tags</a></li>
                                <li><a href="#">tags</a></li>
                            </ul>
                        </div> --}}
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
