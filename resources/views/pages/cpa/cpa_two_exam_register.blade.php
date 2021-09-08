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

            <img class="shape-1 animation-round" src="{{ asset('assets/images/shape/shape-8.png') }}" alt="Shape">

            <img class="shape-2" src="{{ asset('assets/images/shape/shape-23.png') }}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Register</li>
                    </ul>
                    <h2 class="title">CPA Two Exam Registration <span>Form</span></h2>
                </div>
                <!-- Page Banner End -->
            </div>

            <!-- Shape Icon Box Start -->
            <div class="shape-icon-box">

                <img class="icon-shape-1 animation-left" src="{{ asset('assets/images/shape/shape-5.png') }}" alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-badge"></i>
                    </div>
                </div>

                <img class="icon-shape-2" src="{{ asset('assets/images/shape/shape-6.png') }}" alt="Shape">

            </div>
            <!-- Shape Icon Box End -->

            <img class="shape-3" src="{{ asset('assets/images/shape/shape-24.png') }}" alt="Shape">

            <img class="shape-author" src="{{ asset('assets/images/author/author-11.jpg') }}" alt="Shape">

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
                                    <h5 class="card-title text-center">
                                        လက်မှတ်ရပြည်သူစာရင်းကိုင်(ဒုတိယပိုင်း)သင်တန်းစာမေးပွဲဖြေခွင့်လျှောက်လွှာ</h5>
                                    <br />
                                    {{-- <form method="post" id="cpa_exam_register" enctype="multipart/form-data"> --}}
                                    <form method="post" id="cpa2_exam_form" action="javascript:void();" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" id="form_type" class="form-control" name="form_type">
                                        <input type="hidden" name="is_private" id="is_private" class="form-control">
                                            <div class="col-md-12 mt-3">
                                                <div id="is_private_school" style="display=none;">
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label"
                                                            id="cpa2_label1">{{ _('၁။') }}</label>
                                                        <label
                                                            class="col-md-5 col-form-label">{{ __('ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်') }}</label>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select class="form-control form-select"
                                                                    name="private_school_name" id="selected_school_id"
                                                                    style="width: 100%;">
                                                                    <option value="" disabled selected>Select School</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div><br />
                                                </div>
                                        
                                                <div class="row mb-3">
                                                    <!-- စာမေးပွဲကျင်းပသည့် ခုနှစ်/လ -->
                                                    <div class="col-md-1">
                                                        <label class="col-form-label" id="cpa2_label2">၂။</label>

                                                    </div>
                                                    <div class="col-md-1">
                                                        <label class="col-form-label">(က)</label>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="col-form-label">နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲအမှတ်စဥ်</label>

                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="text" name="last_ans_exam_no" class="form-control"
                                                            placeholder="နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲအမှတ်စဥ်" required="" id="last_ans_exam_no">

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">ကျင်းပသည် ခုနှစ်/လ</label>

                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="text" name="date" class="form-control"
                                                            placeholder="လ၊နှစ်(MMM-YYYY)" required id="date">

                                                    </div>

                                                </div>


                                                <div class="row mb-3">
                                                    <div class="col-md-1">

                                                    </div>
                                                    <div class="col-md-1">
                                                        <label class="col-form-label">(ခ)</label>

                                                    </div>

                                                    <div class="col-md-10">
                                                        <label class="col-form-label">အဆိုပါစာမေးပွဲတွင်အောင်မြင်ခဲ့သည့် Module
                                                            ရှိပါကဆိုင်ရာအကွက်တွင်(✓)အမှတ်အသားပြုရန်</label>

                                                    </div>


                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-6">

                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="last_ans_module" value="1">&nbsp;Module 1
                                                        </label>
                                                        <label class="checkbox-inline" style="margin-left:3%">
                                                            <input type="checkbox" name="last_ans_module" value="2">&nbsp;Module 2
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-1 ">

                                                    </div>
                                                    <div class="col-md-1 ">
                                                        <label class="col-form-label">(ဂ)</label>

                                                    </div>
                                                    <div class="col-md-4 ">
                                                        <label class="col-form-label">ယခုဖြေဆိုမည့် Module</label>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-form" style="margin-bottom: 4%; margin-top: 5%;">
                                                            <input type="radio" id="0" name="is_full_module" value="0">
                                                            <label for="0">Module 1</label>

                                                            <input type="radio" id="1" name="is_full_module" value="1"
                                                                style="margin-left: 3%;" checked="">
                                                            <label for="1">Module 2</label>

                                                            <input type="radio" id="2" name="is_full_module" value="2"
                                                                style="margin-left: 3%;">
                                                            <label for="2">All Modules</label>
                                                        </div>
                                                    </div>

                                                </div>

                                                {{-- <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label class="col-form-label">၃။</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-5">
                                                            <div class="single-form">
                                                                <label class="col-form-label">စာမေးပွဲကြေးပေးသွင်းပြီးသည့်ပြေစာအမှတ်</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <!-- <div class="single-form"> --><br/>
                                                                <input type="hidden" id="invoice_image" class="form-control"  name="invoice_image" required="" value="invoice_image">
                                                            <!-- </div> -->
                                                        </div>
                                                    </div>

                                                <div class="row mb-3" style="display:none;">
                                                    <div class="col-md-1">
                                                        
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="single-form">
                                                            <label class="col-form-label">ရက်စွဲ</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="single-form">
                                                            <input type="text" name="invoice_date" class="form-control" placeholder="dd/mm/yyyy" >
                                                        </div>
                                                    </div>

                                                </div> --}}

                                                <div class="row"></div>

                                                <div class="row mb-3">
                                                    <div class="col-md-2 offset-md-5">
                                                        {{-- <button type="submit" class="btn btn-success btn-hover-dark w-100">{{ __('Submit') }}</button> --}}
                                                        <button type="submit" id="cpa2submit" class="btn btn-success btn-hover-dark w-100">Submit
                                                        </button>
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


     <!-- cpa2 exam  -->
     <form method="post" id="cpa_exam_register" class="needs-validation" action="javascript:createDAExamRegister();" enctype="multipart/form-data"
           novalidate>
         @csrf
         <div class="modal fade" id="cpa2examModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <br>
                     <div class="modal-body">
                         <div class="row justify-content-center">
                             <center>
                                 <h4 style="margin-bottom:5%;">Certified Public Accountant Part Two Exam Registeration Form Fee - ****** MMK</h4>
                             </center>
                             <div class="col-sm-3 col-5">
                                 <center>
                                     <img class="fit-image" src="{{asset('img/cbpay.png')}}" width="50%" height="50%"
                                          data-value="CBPAY" name="payment_method" id="cb_img">
                                 </center>
                                 <br>
                             </div>
                             <div class="col-sm-3 col-5">
                                 <center>
                                     <img class="fit-image" src="{{asset('img/mpu.png')}}" width="50%" height="50%"
                                          data-value="MPU" name="payment_method" id="mpu_img">
                                 </center>
                                 <br>
                             </div>
                             <div class="col-sm-3 col-5">
                                 <center>
                                     <img class="fit-image" src="{{asset('img/cash.png')}}" width="50%" height="50%"
                                          data-value="CASH" name="payment_method" id="cpa2exam_img">
                                 </center>
                                 <br>
                             </div>
                             <input type="hidden" name="payment_method" value="CASH">
                             <center>
                                 <button type="submit" id="cpa2exam_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
                             </center>
                         </div>
                     </div>
                     <br>
                 </div>
             </div>
         </div>
     </form>


    <!-- JavaScript Section -->
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#form_type').val(localStorage.getItem('course_id'));

            $("input[name='date']").flatpickr({
                enableTime: false,
                dateFormat: "M-Y",
                allowInput: true,
            });

            $("input[name='invoice_date']").flatpickr({
                enableTime: false,
                dateFormat: "d-m-Y",
                allowInput: true,
            });

            var boo = localStorage.getItem("isPrivateSchool");
            if (boo == "true") {
                if (document.getElementById('is_private_school')) {
                    document.getElementById('is_private_school').style.display = 'block';
                    document.getElementById('cpa2_label1').innerHTML = "၁။";
                    document.getElementById('cpa2_label2').innerHTML = "၂။";
                }
            } else {
                if (document.getElementById('is_private_school')) {
                    document.getElementById('is_private_school').style.display = 'none';
                    document.getElementById('cpa2_label2').innerHTML = "၁။";
                }
            }
        });

        loadSchoolList();
    </script>
@endpush
