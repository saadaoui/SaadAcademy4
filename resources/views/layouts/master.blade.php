<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{(app()->getLocale() == 'ar') ? 'rtl' : 'ltr'}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>{{ asset('css/fontawesome-free/js/all.js') }}</script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.css') }}">
    <!-- Styles -->
    <link href="{{ (app()->getLocale() == 'ar') ? asset('css/app-ar.css') : asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
{{-- top bar --}}

@include('common.top-bar')

{{-- nav bar --}}



{{-- content --}}

<main>

    @yield('content')

</main>

{{-- footer --}}

@include('common.footer')



</body>

</html>
