<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MAC</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jqvmap.min.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>
<body>

    <div class="main-wrapper">
        @include('layouts.header')
        @yield('content')
    </div>


    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/video-playlist.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ajax-contact.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!--toastr-->

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="assets/js/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/student_login.js') }}"></script>
    <script src="{{ asset('assets/js/student_info.js') }}"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script src="{{ asset('assets/js/exam_register.js') }}"></script>
    <script src="{{ asset('assets/js/da_register.js') }}"></script>
    @stack('scripts')
</body>

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@include('sweetalert::alert')