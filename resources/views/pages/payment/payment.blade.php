@extends('layouts.app')
@section('content')
<div class="main-wrapper">
    <div class="overlay"></div>
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
                <h2 class="title">Payment <span>Method</span></h2>
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
    <div class="container approve_request" style="overflow: hidden;">
        <div class="email_verify" style="display:block; margin-top:5%; margin-bottom: 5%;">
            <form method="post" action="javascript:updateCode();" enctype="multipart/form-data">
                <div class="card border-success mb-3">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="row justify-content-center" style="margin-bottom: 5%;margin-top: 5%;">
                                <div class="col-12">
                                    <h3 class="heading text-center">Choose Payment</h3>
                                </div>
                            </div>

                            <div class="row justify-content-center mb-4 radio-group">
                                <div class="col-sm-3 col-5">
                                    <div class='radio mx-auto'> 
                                        <a href="{{ url('cbpay') }}">
                                            <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%" data-value="CBPAY" id="channel">
                                        </a> 
                                    </div><br>
                                    <h5>CBPay</h5>
                                </div>
                                <div class="col-sm-3 col-5">
                                    <div class='radio mx-auto'> 
                                        <a href="{{ url('mpu') }}">
                                            <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%" data-value="MPU" id="channel"> 
                                        </a>
                                    </div><br>
                                    <h5>MPU</h5>
                                </div>
                                <div class="col-sm-3 col-5">
                                    <div class='radio mx-auto'> 
                                        <a href="{{ url('cash') }}">
                                            <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%" data-value="CASH" id="channel">
                                        </a> 
                                    </div><br>
                                    <h5>CASH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    </div>
</div>
@endsection