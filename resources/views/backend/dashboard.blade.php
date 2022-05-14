@extends('backend.layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> -
                        Dashboard</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Quick stats boxes -->
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Members online -->
                            <div class="card bg-teal-400">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="font-weight-semibold mb-0">{{ $totalUsers }}</h3>
                                    </div>

                                    <div>
                                        Total Users
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div id="members-online"></div>
                                </div>
                            </div>
                            <!-- /members online -->
                        </div>

                        <div class="col-lg-4">
                            <!-- Today's revenue -->
                            <div class="card bg-blue-400">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="font-weight-semibold mb-0">{{ $totalCategories }}</h3>
                                        <div class="list-icons ml-auto">
                                            <a class="list-icons-item" data-action="reload"></a>
                                        </div>
                                    </div>

                                    <div>
                                        Total Categories
                                    </div>
                                </div>
                                <div id="today-revenue"></div>
                            </div>
                            <!-- /today's revenue -->
                        </div>

                        <div class="col-lg-4">
                            <!-- Current server load -->
                            <div class="card bg-pink-400">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="font-weight-semibold mb-0">{{ $totalPosts }}</h3>
                                    </div>

                                    <div>
                                        Total Posts
                                    </div>
                                </div>
                                <div id="server-load"></div>
                            </div>
                            <!-- /current server load -->
                        </div>
                    </div>
                    <!-- /quick stats boxes -->
                </div>
            </div>
        </div>
    </div>
@endsection
