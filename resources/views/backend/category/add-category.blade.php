@extends('backend.layout.admin-master')

@section('title', 'Add Category ')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <div class="category-title d-flex justify-content-between">
                            <h2>Add Category</h2>
                            <a href="{{ route('category.show') }}"><button class="btn btn-primary">Show Category</button></a>
                        </div>
                        <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3">Categoroy Title</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"
                                        placeholder="Category Name">
                                    @error('title')
                                        <span style="color: red"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-3">Category Image</label>
                                <div class="col-lg-9">
                                    <input type="file" class="form-control h-auto" name="image" id="image"
                                        value="{{ old('image') }}">
                                    @error('image')
                                        <span style="color: red"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-9 offset-xl-3">
                                    <button type="submit" class="btn btn-success">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
