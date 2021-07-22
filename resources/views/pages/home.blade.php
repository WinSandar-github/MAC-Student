@extends('layouts.app')

@section('content')
     <!-- Overlay Start -->
     <div class="overlay"></div>
     <!-- Overlay End -->

     <!-- Slider Start -->
     <div class="section slider-section">

         <!-- Slider Shape Start -->
         <div class="slider-shape">
             <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">
         </div>
         <!-- Slider Shape End -->

         {{-- <div class="container">
             <!-- Slider Content Start -->
             <div class="slider-content">
                 <h4 class="sub-title">Start your favourite course</h4>
                 <h2 class="main-title">Now learning from anywhere, and build your <span>bright career.</span></h2>
                 <p>It has survived not only five centuries but also the leap into electronic typesetting.</p>
                 <a class="btn btn-primary btn-hover-dark" href="#">Start A Course</a>
             </div>
             <!-- Slider Content End -->
         </div> --}}

         <!-- Call to Action Start -->
        <div class="section section-padding-02">
            <div class="container">

                <!-- Call to Action Wrapper Start -->
                <div class="call-to-action-wrapper">

                    <img class="cat-shape-01 animation-round" src="assets/images/shape/shape-12.png" alt="Shape">
                    <img class="cat-shape-02" src="assets/images/shape/shape-13.svg" alt="Shape">
                    <img class="cat-shape-03 animation-round" src="assets/images/shape/shape-12.png" alt="Shape">

                    <div class="row align-items-center">
                        <div class="col-md-6">

                            <!-- Section Title Start -->
                            <div class="section-title shape-02">
                                <h5 class="sub-title">Become A Instructor</h5>
                                <h2 class="main-title">You can join with Edule as <span>a instructor?</span></h2>
                            </div>
                            <!-- Section Title End -->

                        </div>
                        <div class="col-md-6">
                            <div class="call-to-action-btn">
                                <a class="btn btn-primary btn-hover-dark" href="contact.html">Drop Information</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Call to Action Wrapper End -->

            </div>
        </div>
        <!-- Call to Action End -->
@endsection