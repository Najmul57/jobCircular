<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <title>@yield('title')</title>
</head>

<body class="bg-light">
    <!-- header Start -->
    @include('frontend.layout.header')
    <!-- header End -->

    <!-- content End -->
    @yield('content')
    <!-- content End -->

    <!-- footer End -->
    @include('frontend.layout.footer')
    <!-- footer End -->

    <script src="{{ asset('frontend') }}/js/bootstrap.js"></script>
</body>

</html>
