<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @livewireStyles
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/vendors/base/vendor.bundle.base.css')}}" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets\css\bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\css\style.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
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

    <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/vendors/base/vendor.bundle.base.css')}}" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/solid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/light.css') }}">
</head>

<body>
    @include('layouts.inc.frontend.navbar')
    <main>
        @yield('content')
    </main>
    <!-- plugins:js -->
    <script src="{{asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/js/template.js')}}"></script>
    <!-- endinject -->


    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- Scripts -->
    <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('frontend/assets/js/animation.js')}}"></script>
    <script src="{{asset('frontend/assets/js/imagesloaded.js')}}"></script>
    <script src="{{asset('frontend/assets/js/popup.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>

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

    <script>
        window.addEventListener('message', event => {
                if(event.detail){
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.notify(event.detail.text, event.detail.type);
                }
            });
    </script>

    <script src="{{asset('admin/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/js/template.js')}}"></script>
    <!-- endinject -->
    @livewireScripts
</body>

</html>