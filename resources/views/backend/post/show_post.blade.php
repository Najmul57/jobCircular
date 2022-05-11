@extends('backend.layout.admin-master')

@section('title', 'Post Details')

@section('content')
    <div class="container mt-3">
        <a href="{{ route('post.index') }}" class="btn btn-primary mb-2">Single Post</a>
        <div class="row">
            <div class="col-sm-12">
                <div class="show-post-page">
                    <h2>{{ $post->title }}</h2>
                    <img style="width: 100%;" src="{{ asset('storage/thumbnail/' . $post->thumbnail) }}"
                                            alt="">
                    <p>{!!$post->description !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
