<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Miss+Fajardose&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>{{ config('app.name', 'Atrium') }}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div>
            @yield('content')
        </div>
        @include('inc.footer')
    </body>
    @stack('scripts')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</html>

{{-- TODELETE --}}