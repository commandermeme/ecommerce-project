<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--styles-->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/quill/css/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/ion-rangeslider/css/ion.rangeSlider.min.css') }}" rel="stylesheet">

    <!--Icons-->
    {{-- <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('dist/vendors/@coreui/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

    <!--Includes in view-->
    @include('includes.header') 
    <div class="app-body">
        @include('includes.sidebar') 
        <main class="main">
            @yield('content')
        </main>
    </div>
    @include('includes.footer')   

    <!-- Bootstrap and necessary plugins-->
    <script src="{{ asset('dist/vendors/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/popper.js/js/popper.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/pace-progress/js/pace.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/@coreui/coreui-pro/js/coreui.min.js') }}"></script>

    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('dist/vendors/chart.js/js/Chart.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js') }}"></script>
    <script src="{{ asset('dist/js/main.js') }}"></script>
    <script src="{{ asset('dist/vendors/datatables.net/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('dist/vendors/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('dist/js/datatables.js') }}"></script>
    <script src="{{ asset('dist/vendors/quill/js/quill.min.js') }}"></script>
    <script src="{{ asset('dist/js/text-editor.js') }}"></script>
    <script src="{{ asset('dist/vendors/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('dist/js/sliders.js') }}"></script>
    <script src="{{ asset('dist/js/google-maps.js') }}"></script>
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?callback=InitMap&amp;key=AIzaSyASyYRBZmULmrmw_P9kgr7_266OhFNinPA') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-validation/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('dist/js/validation.js') }}"></script>

    <!--CDN-->
    <script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
                .create( document.querySelector( '#ck-editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
    </script>


</body>
</html>
