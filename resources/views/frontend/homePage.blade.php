@extends('frontend.layouts.app')

@section('title', 'Home Page')

@section('content')

    <section class="pb-5">
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-sm-6 col-md-4 mt-3">
                            <div class="card">
                                <img src="{{ asset('storage/thumbnail/'.$post->thumbnail) }}" class="card-img-top">
                                <div class="card-body">
                                    <a href="{{ route('singlepost',$post->id) }}" class="card-text text-decoration-none fw-bold text-secondary">
                                        {{ $post->title }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="row my-3">
                    {{ $posts->links() }}
                </div>
            </div>
    </section>

@endsection
