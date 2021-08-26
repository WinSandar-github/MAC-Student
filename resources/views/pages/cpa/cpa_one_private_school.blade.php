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
                    <h2 class="title">CPA One Registration  <span>Form</span></h2>
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
        <div class="container" style="overflow: hidden;">

            <div class="row mt-5">


                <!-- <input type="hidden" name="student_info_id" class="form-control" value="1"> -->
                <div class="card border-success mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="card-title text-center">မြန်မာနိုင်ငံစာရင်းကောင်စီ</h5>
                                        <h5 class="card-title text-center">လက်မှတ်ရပြည်သူ့စာရင်းကိုင်(ပထမပိုင်း) မှတ်ပုံတင်ခွင့်လျှောက်လွှာ</h5>
                                    </div>
                                </div>
                                <br/>

                            </div>
                        </div>
                        <div>

                            <form class="needs-validation" method="post" action="javascript:Private_School_Submit();" enctype="multipart/form-data" novalidate>

                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ _('၁။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                            <label class="col-form-label">{{ _('ကိုယ်ပိုင်စာရင်းကိုင်သင်တန်းကျောင်းအမည်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                            <input type="text" id="private_school_name" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
																<br>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ _('၂။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                            <label class="col-form-label">{{ _('ပညာသင်နှစ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                            <input type="text" id="academic_year" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
																<br>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ _('၃။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                            <label class="col-form-label">{{ _('တိုက်ရိုက်တက်ရောက်ခွင့်ရသည့် အမှတ်စဥ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                            <input type="text" id="direct_access_no" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div>
																<br>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div>
                                            <label class="col-form-label">{{ _('၄။') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                            <label class="col-form-label">{{ _('ဝင်ခွင့်စာမေးပွဲ အောင်မြင်သည့်အမှတ်စဥ်') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                            <input type="text" id="entry_success_no" class="form-control" value="" required>
                                        </div>
                                    </div>
                                </div><br/>
																
                                <div class="row">
                                    <div class="col-md-1">

                                            <label class="col-form-label">{{ _('၅။') }}</label>

                                    </div>
                                    <div class="col-md-5">
                                            <label class="col-form-label">{{ _('တက်ရောက်ခွင့်ရရှိသည့်သင်တန်းအမှတ်စဥ် /အပိုင်း/ကိုယ်ပိုင်အမှတ်') }}</label>
                                    </div>
                                    <div class="col-md-5">
                                            <input type="text" class="form-control" id="batch_part_no" value="" required >
                                    </div>
                                </div><br/>


                                <div class="row">
                                    <label class="col-md-1 col-form-label">{{ __('၆။') }}</label>
                                    <div class="col-md-1 col-form-label"><input type="checkbox" name="submit_confirm" id="submit_confirm" onclick="ConfirmSubmit()"></div>
                                    <label class="col-md-10 col-form-label">{{ __('အထက်ဖော်ပြပါအချက်အလက်အားလုံးမှန်ကန်ပါသည်။') }}</label>
                                </div><br/>

                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label"></label>
                                    <label class="col-md-10 col-form-label">{{ __('မြန်မာနိုင်ငံစာရင်းကောင်စီဥပဒေနှင့် နည်းဥပဒေများအတိုင်း ကျင့်ကြံလိုက်နာမည်ဖြစ်ကြောင်း ဝန်ခံလျက် လျှောက်ထားအပ်ပါသည်။') }}</label>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 offset-md-5">
                                        <button type="submit" class="btn btn-success btn-hover-dark w-100" id="submit_btn" disabled>{{ __('Submit') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- JavaScript Section -->
    <script>
         var mmnrc_regions = {!! json_encode($nrc_regions) !!};
        // get NRC Townships data from myanmarnrc.php config file
        var mmnrc_townships = {!! json_encode($nrc_townships) !!};
        // get NRC characters data from myanmarnrc.php config file
        var mmnrc_characters = {!! json_encode($nrc_characters) !!};
        // get language data from myanmarnrc.php config file
        var mmnrc_language = "{{ $nrc_language }}";
    </script>
@endsection
@push('scripts')
<script type="text/javascript">

</script>
@endpush
