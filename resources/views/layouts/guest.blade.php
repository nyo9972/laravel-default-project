<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{url('assets/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('assets/js/sb-admin-2.min.js')}}"></script>
    <script src="{{url('assets/vendor/chart.js/Chart.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    @livewireStyles
    @powerGridStyles
</head>
    <body class="bg-light font-sans antialiased">
        {{ $slot }}

        @stack('modals')
        @livewireScripts
        @powerGridScripts
        @stack('scripts')
        <style>
            .col-12.col-sm-6.col-md-6 {
                min-width: 200px !important;
            }
            .btn.btn-secondary.btn-sm.dropdown-toggle {
                max-height: 30px !important;
            }
        </style>

    </body>
</html>
