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
                                    {{--<form method="post" id="cpa_exam_register" enctype="multipart/form-data">--}}
                                    <form  action="javascript:void();" method="post" id="cpa_exam_form" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" id="form_type" class="form-control" name="form_type">
                                        <input type="hidden" name="is_private" id="is_private" class="form-control">
                                            <div class="col-md-12 mt-3">

                                                <div class="row">
                                                    <div class="col-md-8">

                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၁။') }}</label>
                                                            <label for="" class="col-md-3 col-form-label label_align_right">အမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                            <div class="col-md-4">
                                                                <input type="text" name="name_mm" id="name_mm" class="form-control" readonly>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="name_eng" id="name_eng" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၂။') }}</label>
                                                            <label for="" class="col-md-3 col-form-label label_align_right">နိုင်ငံသားစိစစ်ရေးကတ်ပြားအမှတ်</label>
                                                            <div class="col-md-8">
                                                                <div class="row" style="padding-top: 0px; margin-top: 0px;">
                                                                    <div class="col-md-2 col-5 pr-1">
                                                                        <input type="text" name="nrc_state_region" id="nrc_state_region" class="form-control" readonly>
                                                                    </div>
                                                                    <div class="col-md-3 col-7 px-1">
                                                                        <input type="text" name="nrc_township" id="nrc_township" class="form-control" readonly>
                                                                    </div>
                                                                    <div class="col-md-2 col-5 px-1">
                                                                        <input type="text" name="nrc_citizen" id="nrc_citizen" class="form-control" readonly>
                                                                    </div>

                                                                    <div class="col-md-5 col-7 pl-1">
                                                                        <input type="text" name="nrc_number" placeholder="၁၂၃၄၅၆"
                                                                            id="nrc_number" pattern=".{6,6}" class="form-control"
                                                                            oninput="this.value= en2mm(this.value);"
                                                                            maxlength="6" minlength="6" placeholder=""
                                                                            style="height: 38px" value="{{ old('nrc_number') }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <br>

                                                        <div class="row">
                                                            <label for="" class="col-md-1 col-form-label">{{ __('၃။') }}</label>
                                                            <label for="" class="col-md-3 col-form-label label_align_right">အဘအမည်(မြန်မာ/အင်္ဂလိပ်)</label>
                                                            <div class="col-md-4">
                                                                <input type="text" name="father_name_mm" id="father_name_mm" class="form-control" readonly>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" name="father_name_eng" id="father_name_eng" class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-7 pull-right">
                                                            <img class="col-md-3 profile-style" name="previewImg" id="previewImg" src="" accept="image/png,image/jpeg" alt="">
                                                            <p class="mt-2">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၄။') }}</label>
                                                    <label for="" class="col-md-5 col-form-label label_align_right">လူမျိုး</label>
                                                    <div class="col-md-6">
                                                        <input type="text" name="race" id="race" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၅။') }}</label>
                                                    <label for="" class="col-md-5 col-form-label label_align_right">ကိုးကွယ်သည့်ဘာသာ</label>
                                                    <div class="col-md-6">
                                                        <input type="text" name="religion" id="religion" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                                    <label for="" class="col-md-5 col-form-label label_align_right">မွေးသက္ကရာဇ်</label>
                                                    <div class="col-md-6">
                                                        <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၇။') }}</label>
                                                    <label for="" class="col-md-5 col-form-label label_align_right">အမြဲတမ်းနေရပ်လိပ်စာ</label>
                                                    <div class="col-md-6">
                                                        <input type="text" name="current_address" id="current_address" class="form-control"  readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၈။') }}</label>
                                                    <label for="" class="col-md-5 col-form-label label_align_right">ဆက်သွယ်ရန်ဖုန်းနံပါတ်</label>
                                                    <div class="col-md-6">
                                                        <input type="text" name="phone" id="phone" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၉။') }}</label>
                                                    <label for="" class="col-md-5 col-form-label label_align_right">လက်ရှိအလုပ်အကိုင်</label>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="လက်ရှိအလုပ်အကိုင်" name="name" id="name" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၀။') }}</label>
                                                    <label for="" class="col-md-5 col-form-label label_align_right">ရာထူး</label>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="ရာထူး" name="position" id="position" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၁။') }}</label>
                                                    <label for="" class="col-md-5 col-form-label label_align_right">ဌာန</label>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="ဌာန" name="department" id="department" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၂။') }}</label>
                                                    <label for="" class="col-md-5 col-form-label label_align_right">အဖွဲ့အစည်း</label>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="အဖွဲ့အစည်း" name="organization" id="organization" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၃။') }}</label>
                                                    <label for="" class="col-md-5 col-form-label label_align_right">ကုမ္ပဏီအမည်</label>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="ကုမ္ပဏီအမည်" name="company_name" id="company_name" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၄။') }}</label>
                                                    <label for="" class="col-md-5 col-form-label label_align_right">လစာနှင့်လစာနှုန်း</label>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="လစာနှင့်လစာနှုန်း" name="salary" id="salary" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၅။') }}</label>
                                                    <label for="" class="col-md-5 col-form-label label_align_right">ရုံးလိပ်စာ</label>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="ရုံးလိပ်စာ" name="office_address" id="office_address" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label class="col-sm-1 col-form-label">{{ __('၁၆။') }}</label>
                                                    <label class="col-md-5 col-form-label label_align_right">{{ __('နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်') }}</label>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input type="radio"
                                                                                            class="form-check-input mr-3" id="yes"
                                                                                            name="gov_staff" value="1"
                                                                                            style="margin-left: 3%;">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="yes">ဟုတ်</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 pt-2">
                                                        <div class="form-check">
                                                            <div class="row">
                                                                <div class="col-md-4"><input type="radio"
                                                                                            class="form-check-input mr-3" id="no"
                                                                                            name="gov_staff" value="0"
                                                                                            style="margin-left: 3%;">
                                                                </div>
                                                                <div class="col-md-8"><label class="form-check-label " for="no">မဟုတ်</label>
                                                                    <div class="invalid-feedback">နိုင်ငံ့ဝန်ထမ်း ဟုတ်/မဟုတ်
                                                                        ရွေးချယ်ပါ
                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('၁၇။') }}</label>
                                                    <label for="" class="col-md-11 col-form-label">တက္ကသိုလ်တစ်ခုခုမှ
                                                        အောင်မြင်ပြီးခဲ့သော</label>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-1 col-form-label">{{ __('(က)') }}</label>
                                                    <label for="" class="col-md-4 col-form-label label_align_right">တက္ကသိုလ်အမည်</label>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="တက္ကသိုလ်အမည်" name="university_name" id="university_name" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-1 col-form-label">{{ __('(ခ)') }}</label>
                                                    <label for="" class="col-md-4 col-form-label label_align_right">ဘွဲ့အမည်</label>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="ဘွဲ့အမည်" name="degree_name" id="degree_name" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-1 col-form-label">{{ __('(ဂ)') }}</label>
                                                    <label for="" class="col-md-4 col-form-label label_align_right">ခုံအမှတ်</label>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="ခုံအမှတ်" name="roll_number" id="roll_number" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>


                                                <div class="row">
                                                    <label for="" class="col-md-1 col-form-label">{{ __('') }}</label>
                                                    <label for="" class="col-md-1 col-form-label">{{ __('(ဃ)') }}</label>
                                                    <label for="" class="col-md-4 col-form-label label_align_right">နှစ်၊လ</label>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="နှစ်၊လ(MMM-YYYY)" name="qualified_date" id="qualified_date" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <br>

                                                <div id="is_private_school" style="display=none;">
                                                    <div class="row mb-3">
                                                        <label class="col-md-1 col-form-label"
                                                            id="cpa1_label1">{{ __('၁။') }}</label>
                                                        <label
                                                            class="col-md-5 col-form-label label_align_right">{{ __('ကိုယ်ပိုင်သင်တန်းကျောင်းအမည်') }}</label>
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

                                                {{--<div class="row">
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

                                                </div>--}}

                                                <div class="row mb-3">
                                                    <!-- စာမေးပွဲကျင်းပသည့် ခုနှစ်/လ -->
                                                    <div class="col-md-1">
                                                                <label id="cpa1_label2">၂။</label>

                                                        </div>
                                                    <div class="col-md-1">
                                                            <label class="col-form-label">(က)</label>

                                                    </div>
                                                    <div class="col-md-4">
                                                            <label class="col-form-label label_align_right">နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲအမှတ်စဥ်</label>

                                                    </div>
                                                    <div class="col-md-6">
                                                            <input type="text" id="last_ans_exam_no" name="last_ans_exam_no" class="form-control" placeholder="နောက်ဆုံးဖြေဆိုခဲ့သည့်စာမေးပွဲအမှတ်စဥ်" required>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                            <label class="col-form-label">(ခ)</label>

                                                    </div>
                                                    <div class="col-md-4">
                                                            <label for="" class="col-form-label label_align_right">ကျင်းပသည့် ခုနှစ်/လ</label>

                                                    </div>
                                                    <div class="col-md-6">
                                                            <input type="text" id="date" name="date" class="form-control" placeholder="လ ၊ နှစ် (MMM-YYYY)" required>

                                                    </div>

                                                </div>


                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                            <label class="col-form-label">(ဂ)</label>

                                                    </div>

                                                    <div class="col-md-4">
                                                            <label class="col-form-label label_align_right"> ဖြေဆိုအောင်မြင်ခဲ့သည့် Module</label>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="checkbox-inline">
                                                            <input type="checkbox" name="last_ans_module"  value="1">&nbsp;Module 1
                                                        </label>
                                                        <label class="checkbox-inline" style="margin-left:3%">
                                                        <input type="checkbox" name="last_ans_module"  value="2">&nbsp;Module 2
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="row mb-3">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-1">
                                                            <label class="col-form-label">(ဃ)</label>

                                                    </div>

                                                    <div class="col-md-4">
                                                            <label class="col-form-label label_align_right">ယခုဖြေဆိုမည့် Module</label>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-form" style="margin-bottom: 4%; margin-top: 5%;">
                                                            <input type="radio" id="0" name="is_full_module" value="1" checked>
                                                            <label for="0">Module 1</label>

                                                            <input type="radio" id="1" name="is_full_module" value="2" style="margin-left: 3%;">
                                                            <label for="1">Module 2</label>

                                                            <input type="radio" id="2" name="is_full_module" value="3" style="margin-left: 3%;">
                                                            <label for="2">All Modules</label>
                                                        </div>
                                                    </div>

                                                </div>

                                                {{--<div class="row">
                                                        <!-- <div class="col-md-1">
                                                            <div class="single-form">
                                                                <label >၃။</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="single-form">
                                                                <label class="col-form-label">စာမေးပွဲကြေးပေးသွင်းပြီးသည့်ပြေစာအမှတ်</label>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-md-5 mt-3">
                                                            <div class="">
                                                                <input type="hidden" id="invoice_image" class="form-control"  name="invoice_image" required="" value="invoice_image">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row" style="display:none;">
                                                        <div class="col-md-1">

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="single-form">
                                                                <label class="col-form-label">ရက်စွဲ</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="single-form">
                                                                <input type="text" name="invoice_date" class="form-control" placeholder="dd/mm/yyyy">
                                                            </div>
                                                        </div>

                                                </div><br/>--}}

                                                <div class="row">



                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 offset-md-5">
                                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="cpa_exam_submit">{{ __('Submit') }}</button>
                                                    </div>
                                                </div><br/>
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
    <!-- Modal Payment -->
<form  id="cpa_exam_register"   method="post"  class="needs-validation" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <center>
                            <h4 style="margin-bottom:5%;">Certified Public Accountant Part One Exam Registeration Form Fee - ****** MMK</h4>
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
                                     data-value="CASH" name="payment_method" id="cash_img">
                            </center>
                            <br>
                        </div>
                        <input type="hidden" name="payment_method" value="CASH">
                        <center>
                            <button type="submit" id="cpa_exam_btn" class="btn btn-success btn-hover-dark w-30" data-bs-toggle="modal">Pay Now </button>
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



    $(document).ready(function (e) {
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
        $('#is_private').val(boo);
        if (boo == "true") {
            if (document.getElementById('is_private_school')) {
                document.getElementById('is_private_school').style.display = 'block';
                document.getElementById('cpa1_label1').innerHTML = "၁။";
                document.getElementById('cpa1_label2').innerHTML = "၂။";
            }
        } else {
            if (document.getElementById('is_private_school')) {
                document.getElementById('is_private_school').style.display = 'none';
                document.getElementById('cpa1_label2').innerHTML = "၁။";
            }
        }

        const queryString = location.search;
        const urlParams = new URLSearchParams(queryString);

        selectedRegistration(urlParams.get("study_type"));

        get_student_info(student_id).then(data => {
            console.log(data.data)
            if(data){

                document.getElementById('previewImg').src = BASE_URL + data.data.image;
                $("input[name='name_mm']").val(data.data.name_mm);
                $("input[name='name_eng']").val(data.data.name_eng);
                $("input[name='nrc_state_region']").val(data.data.nrc_state_region);
                $("input[name='nrc_township']").val(data.data.nrc_township);
                $("input[name='nrc_citizen']").val(data.data.nrc_citizen);
                $("input[name='nrc_number']").val(data.data.nrc_number);
                $("input[name='father_name_mm']").val(data.data.father_name_mm);
                $("input[name='father_name_eng']").val(data.data.father_name_eng);
                $("input[name='race']").val(data.data.race);
                $("input[name='religion']").val(data.data.religion);
                $("input[name='date_of_birth']").val(data.data.date_of_birth);
                $("input[name='name']").val(data.data.student_job.name);
                $("input[name='position']").val(data.data.student_job.position);
                $("input[name='department']").val(data.data.student_job.department);
                $("input[name='organization']").val(data.data.student_job.organization);
                $("input[name='company_name']").val(data.data.student_job.company_name);
                $("input[name='salary']").val(data.data.student_job.salary);
                $("input[name='office_address']").val(data.data.student_job.office_address);
                $("input[name='current_address']").val(data.data.current_address);
                $("input[name='address']").val(data.data.address);
                $("input[name='phone']").val(data.data.phone);

                $("input[name='university_name']").val(data.data.student_education_histroy.university_name);
                $("input[name='degree_name']").val(data.data.student_education_histroy.degree_name);
                $("input[name='roll_number']").val(data.data.student_education_histroy.roll_number);
                $("input[name='qualified_date']").val(data.data.student_education_histroy.qualified_date);

                if(data.data.gov_staff == 0 ){
                    $("#no").prop("checked", true);
                }else{
                    $("#yes").prop("checked", true);
                }

            }

        })

    });

    loadSchoolList();
</script>
<script>
    $( "#cpa_exam_submit" ).click(function() {
        if(allFilled('#cpa_exam_form')){
            $('#paymentModal').modal('show');
        }
        else{
        }
    });
    function allFilled(form_id) {
        var filled = true;
        $(form_id+' input').each(function() {
          if($(this).attr('id')=="date" && $(this).val() == '')
          {  filled = false;  }
          if($(this).attr('id')=="last_ans_exam_no" && $(this).val() == '')
          {  filled = false;  }
        });
        return filled;
    }
    $('#cpa_exam_btn').click(function () {
        setTimeout(function () {
            $('#paymentModal').modal('hide');
        }, 1000);
    });

    $('#cash_img').click(function() {
        $('#cpa_exam_btn').prop('disabled', false);
    });

    $('#cpa_exam_btn').prop('disabled', true);
</script>
@endpush
