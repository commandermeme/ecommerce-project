<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts and Icons -->
    <link href="{{ asset('dist/vendors/@coreui/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('dist/vendors/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/popper.js/js/popper.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/pace-progress/js/pace.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/@coreui/coreui-pro/js/coreui.min.js') }}"></script>

</body>
</html>
