<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="icon" href="{{asset('public/user_asset/img/favicon.png')}}" type="image/png"> --}}
    <title>@yield('title') || Doctor24</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/user_asset/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/user_asset/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/user_asset/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/user_asset/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/user_asset/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('public/user_asset/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('public/user_asset/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/user_asset/vendors/jquery-ui/jquery-ui.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('public/user_asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/user_asset/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('public/custom.css') }}">
</head>

<body>



    <!--================Header Menu Area =================-->
    @include('shared.user.header')
    <!--================Header Menu Area =================-->

    @yield('content')

    <!--================ start footer Area =================-->
        @include('shared.user.footer')
    <!--================ End footer Area =================-->

    <!--================ Optional JavaScript =================-->
    <!--================ jQuery first, then Popper.js, then Bootstrap JS =================-->
    <script src="{{asset('public/user_asset/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('public/user_asset/js/popper.js')}}"></script>
    <script src="{{asset('public/user_asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/user_asset/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('public/user_asset/vendors/isotope/isotope-min.js')}}"></script>
    <script src="{{asset('public/user_asset/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/user_asset/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="{{asset('public/user_asset/js/mail-script.js')}}"></script>
    <script src="{{asset('public/user_asset/js/custom.js')}}"></script>
    @yield('script')
</body>

</html>
