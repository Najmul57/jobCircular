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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <style>
        .table {
            min-width: max-content;
        }

    </style>

    <!-- /global stylesheets -->

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-light">

        <!-- Header with logos -->
        @include('backend.layouts.logo')
        <!-- /header with logos -->


        <!-- Mobile controls -->
        @include('backend.layouts.mobile_menu')
        <!-- /mobile controls -->


        <!-- Navbar content -->
        @include('backend.layouts.navbar')
        <!-- /navbar content -->

    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        @include('backend.layouts.sidebar')
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- /theme JS files -->
    <script>
        $('#summernote').summernote({
            placeholder: 'Post Description',
            tabsize: 2,
            //   height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>


</body>

</html>
