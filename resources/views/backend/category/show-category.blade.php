@extends('backend.layout.admin-master')

@section('title', 'Category Page')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
              	  <!-- Basic datatable -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">All Category List</h5>
                        <a href="{{ route('categories') }}"><button class="btn btn-primary">Add Category</button></a>
                    </div>
                    <table class="table datatable-basic">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Category Name</th>
                                <th>Category Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Category as $key=>$Category)
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $Category->title }}</td>
                                    <td>
                                        <img style="width: 50px;height:50px" src="{{ asset($Category->image) }}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ route('category.edit',$Category->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('category.delete',$Category->id) }}" class="btn btn-danger">Trash</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /basic datatable -->
            </div>
        </div>
    </div>
@endsection
