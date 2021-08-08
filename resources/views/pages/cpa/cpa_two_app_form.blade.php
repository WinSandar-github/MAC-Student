@php
	$nrc_language = config('myanmarnrc.language');
	$nrc_regions = config('myanmarnrc.regions_states');
	$nrc_townships = config('myanmarnrc.townships');
	$nrc_citizens = config('myanmarnrc.citizens');
	$nrc_characters = config('myanmarnrc.characters');
@endphp

@extends('layouts.app')

@section('content')
    <div class="main-wrapper">

        <!-- Header Section Start -->
        <!-- Header Section End -->

        <!-- Mobile Menu Start -->
        <!-- Mobile Menu End -->

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!-- Page Banner Start -->
        <div class="section page-banner">

            <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png')}}" alt="Shape">

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png')}}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">DA Two Application <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            <div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png')}}" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png')}}" alt="Shape">

            </div>
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png')}}" alt="Shape">

            <img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg')}}" alt="Shape">

        </div>

        <!-- Reg Form -->
        <div class="container" style="overflow: hidden;">

            <div class="blog-details-comment">
                <div class="comment-form">
                    <div class="form-wrapper">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form   id="store_cpa_two_form" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card border-success mb-3">
                                        <div class="card-body">
                                        <h5 class="card-title text-center">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                    <h5 class="card-title text-center">လက်မှတ်ရပြည်သူစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်းတက်ရောက်ခွင့်လျှောက်လွှာ</h5>
                                <hr>

                                           <input type="hidden" name="batch_id" value="{{$batch['id']}}"/>
                                            <div class="row">
                                                
                                                <label class=col-md-3>Batch Name</label>
                                                <p class="col-md-9"> {{$batch['name']}}</p>
                                                
                                                
                                                
                                            </div>
                                            <div class="row">
                                                <label class=col-md-3>Payment</label>
                                                <p class="col-md-9 text-primary">Payment System Coming Soon</p>
                                            </div>
                                            <div class="col-md-12">
                                                 <div class="single-form text-center">
                                                    <button class="btn btn-primary btn-hover-dark">Submit Now</button>
                                                </div>
                                            </div>
                                            
                                        </div> 
                                    </div>
                                </form>
                            </div>

                        </div>
                        
                    </div>
                <!-- Form Wrapper Start -->
                   
                <!-- Form Wrapper End -->
                </div><br><br>
            </div>
        </div>
    </div>
  
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function (e) {
        
         

        
    });
     
</script>
@endpush
