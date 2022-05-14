@extends('backend.layouts.app')

@section('title', 'Add Post')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('post.index') }}" class="btn btn-primary">Show Post</a>
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Add Post</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-3">Post Name</label>
                                <div class="col-lg-9">
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror ">
                                    @error('title')
                                        <span style="color: red"> <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3">Post Description</label>
                                <div class="col-lg-9">
                                    <textarea name="description" id="summernote" ></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3">Post Name</label>
                                <div class="col-lg-9">
                                    <select name="category_id" class="form-select form-control  @error('category_id') is_invalid  @enderror">
                                        <option value="" selected>Select Category</option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span style="color: red"> <strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3">Meta Keyword</label>
                                <div class="col-lg-9">
                                    <select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc>
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
										<option value="AL" selected>Alabama</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3">Meta Description</label>
                                <div class="col-lg-9">
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
                            <button type="submit" class="btn btn-primary">Submit <i
                                    class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /form inputs -->

</div>
@endsection
