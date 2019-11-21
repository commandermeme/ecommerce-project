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

    <!--Custom CSS-->
    <style>
        .hovereffect {
            width: 100%;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
        }
        .hovereffect .overlay {
            width: 100%;
            position: absolute;
            overflow: hidden;
            left: 0;
            top: auto;
            bottom: 0;
            padding: 1em;
            height: 4.75em;
            background: rgb(50, 156, 112);
            color: #0cb823;
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
            -webkit-transform: translate3d(0,100%,0);
            transform: translate3d(0,100%,0);
            visibility: hidden;

        }

        .hovereffect img {
            display: block;
            position: relative;
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
        }

        .hovereffect:hover img {
        -webkit-transform: translate3d(0,-10%,0);
            transform: translate3d(0,-10%,0);
        }

        .hovereffect button {
            text-transform: uppercase;

            text-align: center;
            position: relative;
            font-size: 17px;
            padding: 10px;
        
            float: left;
            margin: 0px;
            display: inline-block;
        }

        .hovereffect a.info {
            display: inline-block;
            text-decoration: none;
            padding: 7px 14px;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid rgb(35, 207, 58);
            margin: 50px 0 0 0;
            background-color: green;
        }
        .hovereffect a.info:hover {
            box-shadow: 0 0 5px #fff;
        }


        .hovereffect p.icon-links a {
            float: right;
            color: #0b6b94;
            font-size: 1.4em;
        }

        .hovereffect:hover p.icon-links a:hover,
        .hovereffect:hover p.icon-links a:focus {
            color: #252d31;
        }

        .hovereffect button,
        .hovereffect p.icon-links a {
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
            -webkit-transform: translate3d(0,200%,0);
            transform: translate3d(0,200%,0);
            visibility: visible;
        }

        .hovereffect p.icon-links a span:before {
            display: inline-block;
            padding: 8px 10px;
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }


        .hovereffect:hover .overlay,
        .hovereffect:hover button,
        .hovereffect:hover p.icon-links a {
            -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
        }

        .hovereffect:hover button {
            -webkit-transition-delay: 0.05s;
            transition-delay: 0.05s;
        }

        .hovereffect:hover p.icon-links a:nth-child(3) {
            -webkit-transition-delay: 0.1s;
            transition-delay: 0.1s;
        }

        .hovereffect:hover p.icon-links a:nth-child(2) {
            -webkit-transition-delay: 0.15s;
            transition-delay: 0.15s;
        }

        .hovereffect:hover p.icon-links a:first-child {
            -webkit-transition-delay: 0.2s;
            transition-delay: 0.2s;
        }

        @keyframes check {0% {height: 0;width: 0;}
        25% {height: 0;width: 10px;}
        50% {height: 20px;width: 10px;}
        }
        .checkbox{background-color:#fff;display:inline-block;height:28px;margin:0 .25em;width:28px;border-radius:4px;border:1px solid #ccc;float:right}
        .checkbox span{display:block;height:28px;position:relative;width:28px;padding:0}
        .checkbox span:after{-moz-transform:scaleX(-1) rotate(135deg);-ms-transform:scaleX(-1) rotate(135deg);-webkit-transform:scaleX(-1) rotate(135deg);transform:scaleX(-1) rotate(135deg);-moz-transform-origin:left top;-ms-transform-origin:left top;-webkit-transform-origin:left top;transform-origin:left top;border-right:4px solid #fff;border-top:4px solid #fff;content:'';display:block;height:20px;left:3px;position:absolute;top:15px;width:10px}
        .checkbox span:hover:after{border-color:#999}
        .checkbox input{display:none}
        .checkbox input:checked + span:after{-webkit-animation:check .8s;-moz-animation:check .8s;-o-animation:check .8s;animation:check .8s;border-color:#555}
        .checkbox input:checked + .default:after{border-color:#444}
        .checkbox input:checked + .primary:after{border-color:#2196F3}
        .checkbox input:checked + .success:after{border-color:#8bc34a}
        .checkbox input:checked + .info:after{border-color:#3de0f5}
        .checkbox input:checked + .warning:after{border-color:#FFC107}
        .checkbox input:checked + .danger:after{border-color:#f44336}
    </style>

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
