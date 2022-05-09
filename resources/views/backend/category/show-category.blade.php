@extends('backend.layout.admin-master')

@section('title', 'Category Page');


@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Basic datatable -->
                <div class="card">
                    <div class="card-body">
                        <table class="table datatable-basic">
                            <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category Name</th>
                                    <th>Category Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($category as $key => $category)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $category->title }}</td>
                                        {{-- <td>{{ $category->image }}</td> --}}
                                        <td>
                                            <img style="width: 50px;" src="{{ asset('storage/image/' . $category->image) }}"
                                                alt="">
                                        </td>
                                        <td>
                                            <a href="{{ route('category.edit', $category->id) }}"
                                                class="btn btn-primary">Edit</a>

                                            <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                                style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are You Sure to Delete?')"
                                                    class="btn btn-danger">Delete</button>
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
