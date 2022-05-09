@extends('backend.layout.admin-master')

@section('title', 'Update Category')

@section('content')
    <!-- Content area -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('category.index') }}" class="btn btn-primary">Show Category</a>
                        <form action="{{ route('category.update', $category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            @method('PUT')
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Add Category</legend>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Category Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="title"
                                            class="form-control @error('title') is-invalid @enderror "
                                            value="{{ $category->title }}">
                                        @error('title')
                                            <span style="color: red"> <strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">Category Image</label>
                                    <div class="col-lg-9">
                                        <input type="file" name="image"
                                            class="form-control @error('image') is-invalid @enderror ">
                                        @error('image')
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
