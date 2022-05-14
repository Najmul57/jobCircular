@extends('backend.layouts.app')

@section('title', 'Post Details')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('post.index') }}" class="btn btn-primary mb-2">Single Post</a>
                        <div class="card-header">
                            <h2>{{ $post->title }}</h2>
                        </div>
                        <div class="show-post-page">
                            <img style="width: 100%;" src="{{ asset('storage/thumbnail/' . $post->thumbnail) }}" alt="">
                            <p>{!! $post->description !!}</p>
                        </div>

                    </div>
                    <div class="card-footer">
                        <td style="display: inline-block">
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary"><i
                                    class="fa fa-edit"></i> Edit</a>

                            <form action="{{ route('post.destroy', $post->id) }}" method="POST"
                                style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are You Sure to Delete?')"
                                    class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
