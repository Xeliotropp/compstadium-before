<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    @livewireStyles

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/templatemo-chain-app-dev.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    @livewireScripts
</head>

<body>

    <div id="app">
        <div class="container-scroller">
            @include('layouts.includes.frontend.navbar')
        </div>

        <main class="py-4">
            @yield('content')
        </main>
        <div class="container-scroller">
            @include('layouts.includes.frontend.footer')
        </div>
    </div>

    <!-- Scripts -->
    <script src="frontend/vendor/jquery/jquery.min.js"></script>
    <script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/assets/js/owl-carousel.js"></script>
    <script src="frontend/assets/js/animation.js"></script>
    <script src="frontend/assets/js/imagesloaded.js"></script>
    <script src="frontend/assets/js/popup.js"></script>
    <script src="frontend/assets/js/custom.js"></script>
</body>

</html>