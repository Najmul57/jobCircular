@extends('backend.layout.admin-master')

@section('title', 'Update Post')

@section('content')
    <!-- Content area -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('post.index') }}" class="btn btn-primary">Show Post</a>
                        <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Add Post</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Post Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="title"
                                            class="form-control @error('title') is-invalid @enderror"
                                            value="{{ $post->title }}">
                                        @error('title')
                                            <span style="color: red"> <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Post Description</label>
                                    <div class="col-lg-9">
                                        <textarea name="description" id="summernote">{{ $post->description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Post Name</label>
                                    <div class="col-lg-9">
                                        <select name="category_id"
                                            class="form-select form-control  @error('category_id') is_invalid @enderror">
                                            <option value="" selected>Select Category</option>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}"
                                                    @if ($cat->id == $post->category_id) selected @endif>{{ $cat->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span style="color: red"> <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Post Image</label>
                                    <div class="col-lg-9">
                                        <input type="file" name="thumbnail"
                                            class="form-control @error('thumbnail') is-invalid @enderror ">
                                        @error('thumbnail')
                                            <span style="color: red"> <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update <i
                                        class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /form inputs -->

    </div>
    <!-- /content area -->
@endsection
