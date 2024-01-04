<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Starter</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <link rel="stylesheet" href="{{asset('/fontawesome-free/css/all.min.css')}}">

        <link rel="stylesheet" href="{{asset('/css/adminlte.min.css')}}">
        @stack('css')
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('layouts-backend.navbar')
            @include('layouts-backend.sidebar')
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('layouts-backend.rightside')
            @include('layouts-backend.footer')
        </div>
    </body>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/adminlte.min.js')}}"></script>
    @stack('js')
</html>
