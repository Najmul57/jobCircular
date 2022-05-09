<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('backend') }}/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend') }}/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend') }}/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend') }}/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend') }}/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-light">

        <!-- Header with logos -->
        @include('backend.layout.logo')
        <!-- /header with logos -->


        <!-- Mobile controls -->
        @include('backend.layout.mobile-menu')
        <!-- /mobile controls -->


        <!-- Navbar content -->
        @include('backend.layout.navbar')
        <!-- /navbar content -->

    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        @include('backend.layout.sidebar')
        <!-- /main sidebar -->


        <!-- Main content -->

        @yield('content')

        <!-- /main content -->

    </div>
    <!-- /page content -->


    <!-- Core JS files -->
    <script src="{{ asset('backend') }}/global_assets/js/main/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('backend') }}/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="{{ asset('backend') }}/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="{{ asset('backend') }}/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="{{ asset('backend') }}/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="{{ asset('backend') }}/global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="{{ asset('backend') }}/global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="{{ asset('backend') }}/assets/js/app.js"></script>
    <script src="{{ asset('backend') }}/global_assets/js/demo_pages/dashboard.js"></script>
	<script src="{{ asset('backend') }}/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="{{ asset('backend') }}/global_assets/js/demo_pages/datatables_basic.js"></script>
    <!-- /theme JS files -->

</body>

</html>
