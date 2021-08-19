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
                    <h2 class="title">CPA One Exam Registration <span>Form</span></h2>
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
                <!-- Form Wrapper Start -->
                    <div class="form-wrapper">
                        <div class="row">
                            <div class="card border-success mb-3">
                                <div class="card-body">
                                    <h5 class="card-title text-center">မြန်မာနိုင်ငံ စာရင်းကောင်စီ</h5>
                                    <h5 class="card-title text-center">လက်မှတ်ရပြည်သူစာရင်းကိုင်(ပထမပိုင်း)သင်တန်းစာမေးပွဲဖြေခွင့်လျှောက်လွှာ</h5>
                                    <br/>
                                    <form method="post" id="cpa_exam_register" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" id="form_type" class="form-control" name="form_type">
                                        <div class="col-md-12">
                                                <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label >၁။</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="single-form">
                                                                <label class="col-form-label">ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="single-form">
                                                                <input type="text" placeholder="ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်" name="private_school_name" class="form-control" value="{{ old('private_school_name') }}" required="">
                                                            </div>
                                                        </div>

                                                </div>

                                                <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label >၂။</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-10">
                                                            <div class="single-form">
                                                                <label class="col-form-label">စာမေးပွဲပြန်လည်ဖြေဆိုသူများဖြည့်သွင်းရန်</label>
                                                            </div>
                                                        </div>

                                                </div>

                                                <div class="row">
                                                <!-- စာမေးပွဲကျင်းပသည့် ခုနှစ်/လ -->

                                                        <div class="col-md-5 offset-md-1">
                                                            <div class="single-form">
                                                                <label class="col-form-label">(က) နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲအမှတ်စဥ်</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="single-form">
                                                                <input type="text" name="last_ans_exam_no" class="form-control" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="single-form">
                                                                <label for="">ကျင်းပသည် ခုနှစ်/လ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="single-form">
                                                                <input type="text" name="date" class="form-control" placeholder="dd/mm/yyyy" required>
                                                            </div>
                                                        </div>

                                                </div>


                                                <div class="row">

                                                        <div class="col-md-11 offset-md-1">
                                                            <div class="single-form">
                                                                <label class="col-form-label">(ခ) အဆိုပါစာမေးပွဲတွင်အောင်မြင်ခဲ့သည့် Module ရှိပါကဆိုင်ရာအကွက်တွင်(✓)အမှတ်အသားပြုရန်</label>
                                                            </div>
                                                        </div>


                                                </div>
                                                <div class="row">
                                                        <div class="col-md-8 offset-md-4 mt-2">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="last_ans_module"  value="1">&nbsp;Module 1
                                                            </label>
                                                            <label class="checkbox-inline" style="margin-left:3%">
                                                            <input type="checkbox" name="last_ans_module"  value="2">&nbsp;Module 2
                                                            </label>
                                                        </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-3 offset-md-1">
                                                        <div class="single-form">
                                                            <label class="col-form-label">(ဂ)ယခုဖြေဆိုမည့် Module</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="single-form" style="margin-bottom: 4%; margin-top: 5%;">
                                                            <input type="radio" id="0" name="is_full_module" value="0">
                                                            <label for="0">Module 1</label>

                                                            <input type="radio" id="1" name="is_full_module" value="1" style="margin-left: 3%;">
                                                            <label for="1">Module 2</label>

                                                            <input type="radio" id="2" name="is_full_module" value="2" style="margin-left: 3%;">
                                                            <label for="2">All Modules</label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label >၃။</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <div class="single-form">
                                                                <label class="col-form-label">စာမေးပွဲကြေးပေးသွင်းပြီးသည့်ပြေစာအမှတ်</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="single-form">
                                                                <input type="file" id="invoice_image"     name="invoice_image" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label class="col-form-label">ရက်စွဲ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="single-form">
                                                                <input type="text" name="invoice_date" class="form-control" placeholder="dd/mm/yyyy" required>
                                                            </div>
                                                        </div>

                                                </div>
                                                <div class="row">



                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 offset-md-5">
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button>
                                                    </div> 
                                                </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                <!-- Form Wrapper End -->
                </div><br><br>
            </div>
        </div>
    </div>
    <!-- JavaScript Section -->
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function (e) {
        $('#form_type').val(localStorage.getItem('course_id'));
        $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "m-Y",
        });
        $("input[name='invoice_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
        });
    });
</script>
@endpush
