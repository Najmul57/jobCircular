@extends('frontend.layouts.app')

@section('title', 'Post Page')

@section('content')
    <div class="main-content py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-details">
                        <div class="card">
                            <div class="card-header">
                                <h5>{{ $post->title }}</h5>
                            </div>
                            <div class="card-body">
                                <img class="w-100" src="{{ asset('storage/thumbnail/' . $post->thumbnail) }}"
                                    alt="">

                                <div class="post-author d-flex justify-content-between align-items-center">
                                    <div class="blog-author py-3">
                                        <span><strong><i class="fa fa-user"></i> Najmul</strong></span> |
                                        <span><strong><i class="fa-solid fa-blog"></i>
                                                {{ $post->category->title ?? 'No Category' }}</strong></span> |
                                        <span><strong><i class="fa-solid fa-clock"></i> May 7, 2022</strong></span>
                                    </div>
                                    <div class="blog-share d-flex justify-content-end">
                                        <a href="https://www.facebook.com/sharer/sharer.php?{{ route('singlepost', $post->slug) }}"><i style="color: #1877f2" class="fa-brands fa-facebook-f"></i></a>
                                        <a href="whatsapp://send?text={{ route('singlepost', $post->slug) }}" target="_blank"><i  style="color: #25d366" class="fa-brands fa-whatsapp"></i></a>
                                        <a href="#"> <i style="color: #bd081c" class="fa-brands fa-pinterest"></i></a>
                                        <a href="#"> <i style="color: #c32aa3" class="fa-brands fa-instagram"></i></a>
                                        <a href="#"> <i style="color: #1da1f2" class="fa-brands fa-twitter"></i></a>
                                    </div>
                                </div>
                                <hr>
                                <h5><strong>{{ $post->title }}</strong></h5>
                                {!! $post->description !!}
                            </div>
                        </div>
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
                                        <a href="{{ route('categorypost', $category->slug) }}"
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
                    </aside>
                </div>
                <img src="{{ asset('frontend') }}/img/horizantal-banner.jpg" alt="" style="height: 150px;margin-top:10px">
            </div>
        </div>
    </div>
@endsection
