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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}">
    <!-- main style -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
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

    <script src="{{asset('frontend/assets/js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- count down -->
    <script src="{{asset('frontend/assets/js/jquery.countdown.js')}}"></script>
    <!-- isotope -->
    <script src="{{asset('frontend/assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
    <!-- waypoints -->
    <script src="{{asset('frontend/assets/js/waypoints.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- mean menu -->
    <script src="{{asset('frontend/assets/js/jquery.meanmenu.min.js')}}"></script>
    <!-- sticker js -->
    <script src="{{asset('frontend/assets/js/sticker.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>