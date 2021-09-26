<style>
    .dropdown {
        position: relative !important;
        display: inline-block !important;
    }

    .dropdown-content {
        display: none !important;
        position: absolute !important;
        background-color: #f9f9f9 !important;
        min-width: 160px !important;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2) !important;
        padding: 12px 16px !important;
        z-index: 1 !important;
    }

    .dropdown:hover .dropdown-content {
        display: block !important;
    }

    .header-container {
        width: 100%;
        padding-right: var(--bs-gutter-x, .75rem);
        padding-left: var(--bs-gutter-x, .75rem);
        margin-right: auto;
        margin-left: auto;
        max-width: 1245px;
    }

</style>
<div class="header-section">
    <!-- Header Main Start -->
    <div class="header-main">
        <div class="header-container">
            <!-- Header Main Start -->
            <div class="header-main-wrapper">
                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="{{ route('home') }}" class="text-decoration-none text-dark"><img
                                src="{{ asset('assets') }}/images/maclogo1.png" alt="Logo"> <label for="" class="" style="font-weight:bold;font-size:20px;">MAC</label></a>
                </div>
                <!-- Header Logo End -->

                <!-- Header Menu Start -->
                <div class="header-menu d-none d-lg-block">
                    <ul class="nav-menu" id="navbar">

                        {{--                        <script type="text/x-template" id="nav-template">--}}

                        {{--                            <% if(student){ %>--}}
                        {{--                                <li><a href="<%= FRONTEND_URL %>">Dashboard</a></li>--}}
                        {{--                            <% }else{ %>--}}
                        {{--                                <li><a href="<%= FRONTEND_URL %>">Home</a></li>--}}
                        {{--                            <% } %>--}}

                        {{--                            <li>--}}
                        {{--                                <a href="#">Courses</a>--}}
                        {{--                                <ul class="sub-menu course_type">--}}
                        {{--                                </ul>--}}
                        {{--                            </li>--}}
                        {{--                            <li>--}}
                        {{--                                <a href="#">Firm</a>--}}
                        {{--                                <ul class="sub-menu">--}}
                        {{--                                    <li><a href="<%= FRONTEND_URL %>/audit_firm_information">Audit Firm</a></li>--}}
                        {{--                                    <li><a href="<%= FRONTEND_URL %>/non_audit_firm_information">Non Audit Firm</a></li>--}}
                        {{--                                </ul>--}}
                        {{--                            </li>--}}
                        {{--                            <li>--}}
                        {{--                                <a href="#">Membership</a>--}}
                        {{--                                <ul class="sub-menu">--}}
                        {{--                                    <li><a href="<%= FRONTEND_URL %>/cpa_ff_information">CPA Full Fledged</a></li>--}}
                        {{--                                    <li><a href="<%= FRONTEND_URL %>/student_papp_information">PAPP</a></li>--}}
                        {{--                                </ul>--}}
                        {{--                            </li>--}}
                        {{--                            <li><a href="<%= FRONTEND_URL %>/school_information">School</a></li>--}}
                        {{--                            <li><a href="<%= FRONTEND_URL %>/teacher_information">Teacher</a></li>--}}
                        {{--                            <li><a href="<%= FRONTEND_URL %>/mentor_information">Mentor</a></li>--}}
                        {{--                            <li><a href="<%= FRONTEND_URL %>/contact">Contact</a></li>`--}}

                        {{--                        </script>--}}
                    </ul>
                </div>

                <!-- Header Sing In & Up Start -->
                <div class="header-sign-in-up d-none d-lg-block signed_in">
                    <ul>
                        <li>
                            <div class="dropdown">
                                <span><a class="student_name sign-in"></a></span>
                                <div class="dropdown-content">
                                    <a onclick="logout('{{ route("home") }}')">Logout</a>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

                <div class="header-sign-in-up d-none d-lg-block after_signin">
                    <ul>
                        <li><a class="sign-in" href="{{url('login')}}">Sign In</a></li>

                    </ul>
                </div>
                <!-- Header Sing In & Up End -->

                <!-- Header Mobile Toggle Start -->
                <div class="header-toggle d-lg-none">
                    <a class="menu-toggle" href="javascript:void(0)">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <!-- Header Mobile Toggle End -->

            </div>
            <!-- Header Main End -->

        </div>
    </div>
    <!-- Header Main End -->
</div>

<!-- Mobile Menu Start -->
<div class="mobile-menu">

    <!-- Menu Close Start -->
    <a class="menu-close" href="javascript:void(0)">
        <i class="icofont-close-line"></i>
    </a>
    <!-- Menu Close End -->

    <!-- Mobile Top Medal Start -->
    <div class="mobile-top">
        <p><i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a></p>
        <p><i class="flaticon-email"></i> <a href="mailto:address@gmail.com">address@gmail.com</a></p>
    </div>
    <!-- Mobile Top Medal End -->


    <!-- Mobile Sing In & Up Start -->
    <div class="mobile-sign-in-up">
        <!-- <ul>
            <li><a class="sign-in" href="login.html">Sign In</a></li>
            <li><a class="sign-up" href="register.html">Sign Up</a></li>
        </ul> -->
        <div class=" signed_in">
            <ul>
                <li>
                    <div class="dropdown">
                        <span><a class="student_name sign-in"></a></span>
                        <div class="dropdown-content">
                            <a onclick="logout('{{ route("home") }}')">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class=" after_signin">
            <ul>
                <li><a class="sign-in" href="{{url('login')}}">Sign In</a></li>
            </ul>
        </div>
    </div>
    <!-- Mobile Sing In & Up End -->
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-items">
        <ul class="nav-menu" id='mnavbar'>

        </ul>
    </div>
    <!-- Mobile Menu End -->
    <!-- Mobile Menu End -->
    <div class="mobile-social">
        <ul class="social">
            <li><a href="#"><i class="flaticon-facebook"></i></a></li>
            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
            <li><a href="#"><i class="flaticon-skype"></i></a></li>
            <li><a href="#"><i class="flaticon-instagram"></i></a></li>
        </ul>
    </div>
    <!-- Mobile Menu End -->
</div>
<!-- Mobile Menu End -->

@push('scripts')
    <script type="text/javascript">
        check_login();
    </script>
@endpush
