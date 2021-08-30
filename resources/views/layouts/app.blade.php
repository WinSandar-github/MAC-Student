<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MAC</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jqvmap.min.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    <!-- CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/cpa_ff.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/student_info.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/non_audit_firm.css') }}">

    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Bootstrap JS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> -->

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/flatpickr/flatpickr.min.css') }}">

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

    <!--toastr-->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/toastr/toastr.min.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/toastr') }}/toastr.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('EasyLoading/jquery-ui.min.css')}} ">



    <link rel="stylesheet" href="{{ asset('EasyLoading/css/easy-loading.css')}}">

    <!-- dataTables -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/dataTables/dataTables.bootstrap5.min.css') }}">

    <style>
     
      .dropdown:hover .dropdown-menu{
        display: block;
    }
    .dropdown-menu{
        margin-top: 0;
    }
</style>

</head>
<body>


    <div class="main-wrapper">
        @include('layouts.header')
        @yield('content')
    </div>


    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <!-- <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script> -->

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/video-playlist.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/plugins/ajax-contact.js') }}"></script>

    <!-- flatpickr JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> -->
    <script src="{{ asset('assets/js/plugins/flatpickr/flatpickr.js') }}"></script>

    <!-- select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!--toastr-->
    <!-- <script src="{{ asset('assets/toastr/toastr.main.js') }}"></script> -->
    <script src="{{ asset('assets/toastr') }}/toastr.min.js"></script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="assets/js/plugins.min.js"></script> -->
    <script src="{{ asset('assets/js/navbar.js') }}"></script>

     <!-- EasyLoading -->

    <script src="{{ asset('EasyLoading/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('EasyLoading/js/easy-loading.js')}}"></script>
    <script src="{{ asset('assets/js/easyloading.js') }}"></script>




    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/student_login.js') }}"></script>
    <script src="{{ asset('assets/js/student_info.js') }}"></script>
    <script src="{{ asset('assets/js/auth.js') }}"></script>

    <script src="{{ asset('assets/js/papp.js') }}"></script>
    <script src="{{ asset('assets/js/cpa_one.js') }}"></script>
    <script src="{{ asset('assets/js/cpa_ff.js') }}"></script>
    <script src="{{ asset('assets/js/cpa_two.js') }}"></script>
    <script src="{{ asset('vendor/myanmarnrc/myanmarnrc.js') }}"></script>
    <script src="{{ asset('assets/js/audit_firm.js') }}"></script>


    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script> -->

    <script src="{{ asset('assets/js/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

    <!-- dataTables JS -->
    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"> -->
    <script src="{{ asset('assets/js/plugins/dataTables/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables/dataTables.bootstrap5.min.js') }}"></script>


    <script src="{{ asset('assets/js/student_info.js') }}"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script>
    <script src="{{ asset('assets/js/exam_register.js') }}"></script>
    <script src="{{ asset('assets/js/da_register.js') }}"></script>
    <script src="{{ asset('assets/js/user_profile.js') }}"></script>

    <!-- <script src="{{ asset('assets/js/da_two_exam_register.js') }}"></script> -->
    <script src="{{ asset('assets/js/non_audit_firm.js') }}"></script>
    <script src="{{ asset('assets/js/mentor_mac.js') }}"></script>

    <!-- <script src="{{ asset('assets/js/non_audit_firm.js') }}"></script> -->


    <script src="{{ asset('assets/js/teacher_register.js') }}"></script>

    <!-- <script>
show_loader()
setTimeout(() => {
    EasyLoading.hide();

}, 3000);
    </script> -->
    @stack('scripts')
</body>

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@include('sweetalert::alert')
