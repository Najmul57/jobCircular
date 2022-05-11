@extends('backend.layout.admin-master')

@section('title', 'Post Page');


@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <!-- Basic datatable -->
                <div class="card">
                    <div class="card-body">
                        <table class="table datatable-basic">
                            <a href="{{ route('post.create') }}" class="btn btn-primary">Add Post</a>
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Post Name</th>
                                    <th>Post Image</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($post as $key => $post)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $post->title }}</td>
                                        {{-- <td>{{ $category->image }}</td> --}}
                                        <td>
                                            <img style="width: 50px;"
                                                src="{{ asset('storage/thumbnail/' . $post->thumbnail) }}" alt="photo">
                                        </td>
                                        {{-- <td style="width: 100%;">{!! $post->description !!}</td> --}}
                                        <td>{{ $post->category_id }}</td>
                                        <td style="display: inline-block">
                                            <a href="{{ route('post.show', $post->id) }}" class="btn btn-success"><i
                                                    class="fa fa-eye"></i></a>
                                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary"><i
                                                    class="fa fa-edit"></i></a>

                                            <form action="{{ route('post.destroy', $post->id) }}" method="POST"
                                                style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are You Sure to Delete?')"
                                                    class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /basic datatable -->
            </div>
        </div>
    </div>
@endsection
